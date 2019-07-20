<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Company;
use App\WishJobtype;

use Illuminate\Support\Facades\Auth;

class WishJobtypeController extends Controller
{

    public function wishJobtypeAdd(Request $request)
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

            return view('wishJobtypeAdd', $data);
        }
        else {
            return redirect('/');
        }
    }

    public function wishJobtypeCreate(Request $request)
    {
        $this->validate($request, WishJobtype::$rules);
        $wishJobtype = new WishJobtype;
        $form = $request->all();
        unset($form['_token']);
        $wishJobtype->fill($form)->save();
        return redirect('/companyDetail?id=' . $request->company_id);
    }

    public function wishJobtypeEdit(Request $request)
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
                $wishJobtype = WishJobtype::where('company_id', $company->id)->first();
                $company_name = $company->company_name;
                $data = [
                    'wishJobtype' => $wishJobtype,
                    'company_name' => $company_name
                ];
                return view('/wishJobtypeEdit', $data);
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

    public function wishJobtypeUpdate(Request $request)
    {
        $this->validate($request, WishJobtype::$rules);
        $wishJobtype = WishJobtype::where('company_id', $request->company_id)->first();
        $form = $request->all();
        unset($form['_token']);
        $wishJobtype->fill($form)->save();
        return redirect('/companyDetail?id=' . $request->company_id);
    }
}
