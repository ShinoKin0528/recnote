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
        $companes = Company::all();
        $basics = Basic::all();
        for($i = 0; $i < count($basics); $i++)
        {
            $companes[$i]['headoffice_palce'] = $basics[$i]->headoffice_palce;
        }
        $param = [
            'companes' => $companes,
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
        }else {
            return redirect('/');
        }
    }

    public function companyAdd(Request $request)
    {
        return view('companyAdd');
    }
}
