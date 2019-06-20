<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Company;

use Illuminate\Support\Facades\Auth;

class RecnoteController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $items = Company::all();
        $param = [
            'items' => $items,
            'user' => $user
        ];
        return view('index', $param);
    }

    public function companyShow(Request $request)
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
                $data = [
                'a' => 'aaa',
                'request' => $request,
                'company' => $company,
                ];
                return view('companyDetail', $data);
            }
            else
            {
                return redirect('/');
            }
        }else {
            return redirect('/');
        }
    }
}
