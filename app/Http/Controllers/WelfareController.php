<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Company;
use App\Welfare;

use Illuminate\Support\Facades\Auth;

class WelfareController extends Controller
{

    public function welfareAdd(Request $request)
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

            return view('welfareAdd', $data);
        }
        else {
            return redirect('/');
        }
    }

    public function welfareCreate(Request $request)
    {
        $this->validate($request, Welfare::$rules);
        $welfare = new Welfare;
        $form = $request->all();
        unset($form['_token']);
        $welfare->fill($form)->save();
        return redirect('/companyDetail?id=' . $request->company_id);
    }

    public function welfareEdit(Request $request)
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
                $welfare = Welfare::where('company_id', $company->id)->first();
                $company_name = $company->company_name;
                $data = [
                    'welfare' => $welfare,
                    'company_name' => $company_name
                ];
                return view('/welfareEdit', $data);
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

    public function welfareUpdate(Request $request)
    {
        $this->validate($request, Welfare::$rules);
        $welfare = Welfare::where('company_id', $request->company_id)->first();
        $form = $request->all();
        unset($form['_token']);
        $welfare->fill($form)->save();
        return redirect('/companyDetail?id=' . $request->company_id);
    }
}
