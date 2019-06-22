<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Company;
use App\Basic;

use Illuminate\Support\Facades\Auth;

class RecnoteController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $companies = Company::all();
        $basics = Basic::all();
        for($i = 0; $i < count($basics); $i++)
        {
            $companies[$i]['headoffice_place'] = $basics[$i]->headoffice_place;
        }
        $param = [
            'companies' => $companies,
            'user' => $user
        ];
        return view('index', $param);
    }

    public function companyDetail(Request $request)
    {
        $user = Auth::user();
        if (isset($user->id) && isset($request->id))
        {
            $company = Company::where('id', $request->id)->first();
            if (empty($company))
            {
                return redirect('/');
            }
            if ($company->userid == $user->id)
            {   
                $basic = Basic::where('company_id', $request->id)->first();
                $data = [
                    'company' => $company,
                    'basic' => $basic,
                ];
                return view('companyDetail', $data);
            }
            else
            {
                return redirect('/');
            }
        }
        else {
            return redirect('/');
        }
    }

    public function companyAdd(Request $request)
    {
        $user = Auth::user();
        if (isset($user->id))
        {
            return view('companyAdd');
        }
        else {
            return redirect('/');
        }
    }

    public function comapnyCreate(Request $request)
    {
        $this->validate($request, [
            'company_name' => 'required',
            'hitokoto' => 'required',
            'industry' => 'required',
            'jobtype' => 'required',
            'headoffice_place' => 'required|max:50',
            'status' => 'required',
        ]);
        $user = Auth::user();

        //companiesテーブルに追加
        $form_company = new Company;
        $form_company->company_name = $request->company_name;
        $form_company->hitokoto = $request->hitokoto;
        $form_company->industry = $request->industry;
        $form_company->jobtype = $request->jobtype;
        $form_company->status = $request->status;
        $form_company->userid = $user->id;
        $form_company->save();

        //comapniesの最新idを取得
        $company_id = Company::max('id');

        //basicテーブルに追加
        $form_basic = new Basic;
        $form_basic->headoffice_place = $request->headoffice_place;
        $form_basic->company_id = $company_id;
        $form_basic->save();

        return redirect('/');
    }
}
