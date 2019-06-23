<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/recnote.css">
  <script type="text/javascript" src="//typesquare.com/3/tsad/script/ja/typesquare.js?5d0047c660c84ec8b41e6ca1e90393a3"
    charset="utf-8"></script>
</head>

@if (Auth::check())
<div class="wrap">
  <div class="company__box">
    @foreach ($companies as $company)
    @if ($company->userid == $user->id)
    <a class="company__detail-link" href="/companyDetail?id={{$company->id}}">
      <div class=" company__top">
        @if(app('env')=='local')
        <img class="company__status" src="{{ asset('/image/' . $company->status . '.svg') }}">
        @endif
        @if(app('env')=='production')
        <img class="company__status" src="{{ secure_asset('/image/' . $company->status . '.svg') }}">
        @endif
        <div class="company__about">
          <span class="company__hitokoto">{{$company->hitokoto}}</span>
          <h2 class="company__name">{{$company->company_name}}</h2>
        </div>
      </div>
      <ul class="company__list company__list--top">
        <li class="company__ttl">業種</li>
        <li class="company__txt">{{$company->industry}}</li>
      </ul>
      <ul class="company__list company__list--top">
        <li class="company__ttl">職種</li>
        <li class="company__txt">{{$company->jobtype}}</li>
      </ul>
      <ul class="company__list company__list--top">
        <li class="company__ttl">本社</li>
        <li class="company__txt">{{$company->headoffice_place}}</li>
      </ul>
    </a>
    @endif
    @endforeach
  </div>
  <div class="add-company">
    <a class="add-company__button" href="/companyAdd">
      @if(app('env')=='local')
      <img class="add-company__image" src="{{ asset('/image/add_company.svg') }}">
      @endif
      @if(app('env')=='production')
      <img class="add-company__image" src="{{ secure_asset('/image/add_company.svg') }}">
      @endif
    </a>
  </div>
  <div class="bottom-btn">
    <div class="bottom-btn--now">
      <a class="bottom-btn__link" href="/">企業情報</a>
    </div>
    <div class="bottom-btn--notnow">
      <a class="bottom-btn__link" href="/">自分情報</a>
    </div>
  </div>
</div>
@else
<p>ログインしてください</p>
<a href="/login">ログイン</a>
@endif