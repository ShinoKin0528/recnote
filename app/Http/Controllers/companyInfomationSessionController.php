<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Company;
use App\CompanyInfomationSession;

use Illuminate\Support\Facades\Auth;

class CompanyInfomationSessionController extends Controller
{

    public function companyInfomationSessionAdd(Request $request)
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

            return view('companyInfomationSessionAdd', $data);
        }
        else {
            return redirect('/');
        }
    }

    public function companyInfomationSessionCreate(Request $request)
    {
        $this->validate($request, CompanyInfomationSession::$rules);
        $companyInfomationSession = new CompanyInfomationSession;
        $form = $request->all();
        unset($form['_token']);
        $companyInfomationSession->fill($form)->save();
        return redirect('/companyDetail?id=' . $request->company_id);
    }

    public function companyInfomationSessionEdit(Request $request)
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
                $companyInfomationSession = CompanyInfomationSession::where('company_id', $company->id)->first();
                $company_name = $company->company_name;
                $data = [
                    'companyInfomationSession' => $companyInfomationSession,
                    'company_name' => $company_name
                ];
                return view('/companyInfomationSessionEdit', $data);
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

    public function companyInfomationSessionUpdate(Request $request)
    {
        $this->validate($request, CompanyInfomationSession::$rules);
        $companyInfomationSession = CompanyInfomationSession::where('company_id', $request->company_id)->first();
        $form = $request->all();
        unset($form['_token']);
        $companyInfomationSession->fill($form)->save();
        return redirect('/companyDetail?id=' . $request->company_id);
    }
}
