<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Company;
use App\Basic;

use Illuminate\Support\Facades\Auth;

class BasicController extends Controller
{
    public function index(Request $request)
    {
        $basics = Basic::all();
        $param = [
            'basics' => $basics,
        ];
        return view('basic', $param);
    }

    public function basicAdd(Request $request)
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

            return view('basicAdd', $data);
        }
        else {
            return redirect('/');
        }
    }

    public function basicCreate(Request $request)
    {
        $this->validate($request, Basic::$rules);
        $basic = Basic::where('company_id', $request->company_id)->first();
        $form = $request->all();
        unset($form['_token']);
        $basic->fill($form)->save();
        return redirect('/companyDetail?id=' . $request->company_id);
    }

    public function basicEdit(Request $request)
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
                $basic = Basic::where('company_id', $company->id)->first();
                $company_name = $company->company_name;
                $data = [
                    'basic' => $basic,
                    'company_name' => $company_name
                ];
                return view('/basicEdit', $data);
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

    public function basicUpdate(Request $request)
    {
        $this->validate($request, Basic::$rules);
        $basic = Basic::where('company_id', $request->company_id)->first();
        $form = $request->all();
        unset($form['_token']);
        $basic->fill($form)->save();
        return redirect('/companyDetail?id=' . $request->company_id);
    }
}
