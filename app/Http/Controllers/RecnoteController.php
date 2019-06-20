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
        $items = Company::all();
        $company = $items[$request->id];
        if (isset($user->id) && $company->userid == $user->id) {
            $data = [
            'a' => 'aaa',
            'request' => $request,
            'company' => $company,
            ];
            return view('companyDetail', $data);
        }else {
            return redirect('/');
        }
    }
}
