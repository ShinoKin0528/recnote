<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Basic;

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
}
