<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/recnote.css">
  <script type="text/javascript" src="//typesquare.com/3/tsad/script/ja/typesquare.js?5d0047c660c84ec8b41e6ca1e90393a3"
    charset="utf-8"></script>
</head>

<div class="wrap">
  <div class="page-top">
    <h1 class="page-top__ttl">福利厚生編集</h1>
    <p class="page-top__company-name">{{$company_name}}</p>
  </div>
</div>

<div class="wrap">
  <div class="company__box company__box--add">
    @if($errors->isEmpty())
    <form action="welfareEdit" method="POST">
      @csrf
      <ul class="detail__list">
        <li class="detail__item"><input class="add-input" type="hidden" name="company_id"
            value="{{$welfare->company_id}}"></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">初任給</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="starting_salary"
            value="{{$welfare->starting_salary}}"></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">年間休日日数</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="holidays" value="{{$welfare->holidays}}">
        </li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">平均有給日数</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="paid_vacation"
            value="{{$welfare->paid_vacation}}"></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">返金残業時間</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="overtime" value="{{$welfare->overtime}}">
        </li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">休日形式</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="holidays_format" id="" cols="30"
            rows="10">{{$welfare->holidays_format}}</textarea></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">休暇制度</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="holidays_system" id="" cols="30"
            rows="10">{{$welfare->holidays_system}}</textarea></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">就業時間</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="working_hours" id="" cols="30"
            rows="10">{{$welfare->working_hours}}</textarea></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">社会保険</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="social_insurance" id="" cols="30"
            rows="10">{{$welfare->social_insurance}}</textarea></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">手当</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="allowance" id="" cols="30"
            rows="10">{{$welfare->allowance}}</textarea></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">教育制度</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="education" id="" cols="30"
            rows="10">{{$welfare->education}}</textarea></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">資格取得制度</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="get_license" id="" cols="30"
            rows="10">{{$welfare->get_license}}</textarea></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">感じたこと</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="memo" id="" cols="30"
            rows="10">{{$welfare->memo}}</textarea></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__item--send">
          <a href="/companyDetail?id={{$welfare->company_id}}" class="submit-button__add">戻る</a>
          <input class="submit-button__add" type="submit" value="変更する">
        </li>
      </ul>
    </form>
    @else
    <form action="welfareEdit" method="POST">
      @csrf
      <ul class="detail__list">
        <li class="detail__item"><input class="add-input" type="hidden" name="company_id"
            value="{{$welfare->company_id}}"></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">初任給</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="starting_salary"
            value="{{old('starting_salary')}}"></li>
        @if($errors->has('starting_salary'))
        <li class="detail__error">{{$errors->first('starting_salary')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">年間休日日数</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="holidays" value="{{old('holidays')}}"></li>
        @if($errors->has('holidays'))
        <li class="detail__error">{{$errors->first('holidays')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">平均有給日数</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="paid_vacation"
            value="{{old('paid_vacation')}}"></li>
        @if($errors->has('paid_vacation'))
        <li class="detail__error">{{$errors->first('paid_vacation')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">平均残業日数</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="overtime" value="{{old('overtime')}}"></li>
        @if($errors->has('overtime'))
        <li class="detail__error">{{$errors->first('overtime')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">休日形式</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="holidays_format" id="" cols="30"
            rows="10">{{old('holidays_format')}}</textarea></li>
        @if($errors->has('holidays_format'))
        <li class="detail__error">{{$errors->first('holidays_format')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">休暇制度</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="holidays_system" id="" cols="30"
            rows="10">{{old('holidays_system')}}</textarea></li>
        @if($errors->has('holidays_system'))
        <li class="detail__error">{{$errors->first('holidays_system')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">就業時間</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="working_hours" id="" cols="30"
            rows="10">{{old('working_hours')}}</textarea></li>
        @if($errors->has('working_hours'))
        <li class="detail__error">{{$errors->first('working_hours')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">社会保険</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="social_insurance" id="" cols="30"
            rows="10">{{old('social_insurance')}}</textarea></li>
        @if($errors->has('social_insurance'))
        <li class="detail__error">{{$errors->first('social_insurance')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">手当</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="allowance" id="" cols="30"
            rows="10">{{old('allowance')}}</textarea></li>
        @if($errors->has('allowance'))
        <li class="detail__error">{{$errors->first('allowance')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">教育制度</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="education" id="" cols="30"
            rows="10">{{old('education')}}</textarea></li>
        @if($errors->has('education'))
        <li class="detail__error">{{$errors->first('education')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">資格取得制度</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="get_license" id="" cols="30"
            rows="10">{{old('get_license')}}</textarea></li>
        @if($errors->has('get_license'))
        <li class="detail__error">{{$errors->first('get_license')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">感じたこと</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="memo" id="" cols="30"
            rows="10">{{old('memo')}}</textarea></li>
        @if($errors->has('memo'))
        <li class="detail__error">{{$errors->first('memo')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__item--send">
          <a href="/companyDetail?id={{$welfare->comapny_id}}" class="submit-button__add">戻る</a>
          <input class="submit-button__add" type="submit" value="変更する">
        </li>
      </ul>
    </form>
    @endif
  </div>
</div>

<div class="bottom-btn">
  <div class="bottom-btn--now">
    <a class="bottom-btn__link bottom-btn__link--now" href="/">企業情報</a>
  </div>
  <div class="bottom-btn--notnow">
    <a class="bottom-btn__link bottom-btn__link--notnow" href="/myInfo">自分情報</a>
  </div>
</div>