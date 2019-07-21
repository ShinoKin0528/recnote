<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Company;
use App\RecruitementInfo;

use Illuminate\Support\Facades\Auth;

class RecruitementInfoController extends Controller
{

    public function recruitementInfoAdd(Request $request)
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

            return view('recruitementInfoAdd', $data);
        }
        else {
            return redirect('/');
        }
    }

    public function recruitementInfoCreate(Request $request)
    {
        $this->validate($request, RecruitementInfo::$rules);
        $recruitementInfo = new RecruitementInfo;
        $form = $request->all();
        unset($form['_token']);
        $recruitementInfo->fill($form)->save();
        return redirect('/companyDetail?id=' . $request->company_id);
    }

    public function recruitementInfoEdit(Request $request)
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
                $recruitementInfo = RecruitementInfo::where('company_id', $company->id)->first();
                $company_name = $company->company_name;
                $data = [
                    'recruitementInfo' => $recruitementInfo,
                    'company_name' => $company_name
                ];
                return view('/recruitementInfoEdit', $data);
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

    public function recruitementInfoUpdate(Request $request)
    {
        $this->validate($request, RecruitementInfo::$rules);
        $recruitementInfo = RecruitementInfo::where('company_id', $request->company_id)->first();
        $form = $request->all();
        unset($form['_token']);
        $recruitementInfo->fill($form)->save();
        return redirect('/companyDetail?id=' . $request->company_id);
    }
}
