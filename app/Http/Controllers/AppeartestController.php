<?php

namespace App\Http\Controllers;

use App\Company;

use Illuminate\Http\Request;

class AppeartestController extends Controller
{
    public function index(Request $request)
    {
        $items = Company::all();
        return view('appeartest', ['items' => $items]);
    }

    public function add(Request $request)
    {
        return view('addtest');
    }

    public function create(Request $request)
    {
        $this->validate($request, Company::$rules);
        $company = new Company;
        $form = $request->all();
        unset($form['_token']);
        $company->fill($form)->save();
        return redirect('appeartest');
    }
}
