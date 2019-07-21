<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Company;
use App\Questions;

use Illuminate\Support\Facades\Auth;

class QuestionsController extends Controller
{

    public function questionsAdd(Request $request)
    {
        $user = Auth::user();
        if (isset($user->id))
        {
            $company = Company::where('id', $request->id)->first();

            if($company['userid'] != $user['id'])
            {
                return redirect('/');
            }

            $company_id = $company['id'];

            $data = [
                'company_name' => $company['company_name'],
                'company_id' => $company_id
            ];

            return view('questionsAdd', $data);
        }
        else {
            return redirect('/');
        }
    }

    public function questionsCreate(Request $request)
    {
        $this->validate($request, Questions::$rules);
        $questions = new Questions;
        $form = $request->all();
        unset($form['_token']);
        $questions->fill($form)->save();
        return redirect('/companyDetail?id=' . $request->company_id);
    }

    public function questionsEdit(Request $request)
    {
        $user = Auth::user();
        if(isset($user->id) && isset($request->id))
        {
            $company = Company::find($request->id);
            if (empty($company))
            {
                return redirect('/');
            }
            if($company->userid == $user->id)
            {
                $questions = Questions::where('company_id', $company->id)->first();
                $company_name = $company->company_name;
                $data = [
                    'questions' => $questions,
                    'company_name' => $company_name
                ];
                return view('/questionsEdit', $data);
            }
            else
            {
                return redirect('/');
            }
        }
        else
        {
            return redirect('/');
        }
    }

    public function questionsUpdate(Request $request)
    {
        $this->validate($request, Questions::$rules);
        $questions = Questions::where('company_id', $request->company_id)->first();
        $form = $request->all();
        unset($form['_token']);
        $questions->fill($form)->save();
        return redirect('/companyDetail?id=' . $request->company_id);
    }
}
