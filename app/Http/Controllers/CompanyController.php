<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Company;

use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function companyEdit(Request $request)
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
                $data = [
                    'company' => $company
                ];
                return view('/companyEdit', $data);
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

    public function companyUpdate(Request $request)
    {
        $this->validate($request, Company::$rules);
        $company = Company::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $company->fill($form)->save();
        return redirect('/companyDetail?id=' . $company['id']);
    }
}