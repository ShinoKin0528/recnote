<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Myinfos;

use Illuminate\Support\Facades\Auth;

class MyInfoController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        if (isset($user->id))
        {
            $myInfo = Myinfos::where('user_id', $user->id)->first();

            $data = [
                'myInfo' => $myInfo,
            ];
            return view('myInfo', $data);
        }
        else {
            return redirect('/');
        }
    }

    public function myInfoAdd(Request $request)
    {
        $user = Auth::user();
        if (isset($user->id))
        {
            return view('myInfoAdd');
        }
        else {
            return redirect('/');
        }
    }

    public function myInfoCreate(Request $request)
    {
        $this->validate($request, MyInfos::$rules);
        $user = Auth::user();

        //companiesテーブルに追加
        $form_myInfo = new MyInfos;
        $form_myInfo->hope_industry = $request->hope_industry;
        $form_myInfo->hope_job_type = $request->hope_job_type;
        $form_myInfo->what_future = $request->what_future;
        $form_myInfo->strength = $request->strength;
        $form_myInfo->strength_detail = $request->strength_detail;
        $form_myInfo->strength_job = $request->strength_job;
        $form_myInfo->study = $request->study;
        $form_myInfo->study_detail = $request->study_detail;
        $form_myInfo->research = $request->research;
        $form_myInfo->research_detail = $request->research_detail;
        $form_myInfo->user_id = $user->id;
        $form_myInfo->save();

        return redirect('/myInfo');
    }

    public function myInfoEdit(Request $request)
    {
        $user = Auth::user();
        if(isset($user->id))
        {
            $myInfo = Myinfos::where('user_id', $user->id)->first();

            if (empty($myInfo))
            {
                return redirect('/');
            }

            $data = [
                'myInfo' => $myInfo
            ];
            return view('/myInfoEdit', $data);
        }
        else
        {
            return redirect('/');
        }
    }

    public function myInfoUpdate(Request $request)
    {
        $this->validate($request, Myinfos::$rules);
        $user = Auth::user();
        $myInfo = $myInfo = Myinfos::where('user_id', $user->id)->first();
        $form = $request->all();
        unset($form['_token']);
        $myInfo->fill($form)->save();
        return redirect('/myInfo');
    }
}
