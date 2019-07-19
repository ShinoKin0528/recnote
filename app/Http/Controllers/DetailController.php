<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Company;
use App\Detail;

use Illuminate\Support\Facades\Auth;

class DetailController extends Controller
{

    public function detailAdd(Request $request)
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

            return view('detailAdd', $data);
        }
        else {
            return redirect('/');
        }
    }

    public function detailCreate(Request $request)
    {
        $this->validate($request, Detail::$rules);
        $detail = new Detail;
        $form = $request->all();
        unset($form['_token']);
        $detail->fill($form)->save();
        return redirect('/companyDetail?id=' . $request->company_id);
    }

    public function detailEdit(Request $request)
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
                $detail = Detail::where('company_id', $company->id)->first();
                $company_name = $company->company_name;
                $data = [
                    'detail' => $detail,
                    'company_name' => $company_name
                ];
                return view('/detailEdit', $data);
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

    public function detailUpdate(Request $request)
    {
        $this->validate($request, Detail::$rules);
        $detail = Detail::where('company_id', $request->company_id)->first();
        $form = $request->all();
        unset($form['_token']);
        $detail->fill($form)->save();
        return redirect('/companyDetail?id=' . $request->company_id);
    }
}
