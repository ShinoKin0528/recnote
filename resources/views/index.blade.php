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
    @if (isset($companies))
    @foreach ($companies as $company)
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
    @endforeach
  </div>
  @else
  <ul class="no-data">
    <li class="no-data__item no-data__item--txt">興味をもった企業を登録しよう！</li>
    <li class="no-data__item no-data__item--link"><a class="no-data__link" href="/companyAdd">企業を登録する</a></li>
  </ul>
  @endif
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
      <a class="bottom-btn__link bottom-btn__link--now" href="/">企業情報</a>
    </div>
    <div class="bottom-btn--notnow">
      <a class="bottom-btn__link bottom-btn__link--notnow" href="/">自分情報</a>
    </div>
  </div>
</div>
@else
<div class="wrap">
  <div class="top-button">
    <a href="/register" class="top-button__link">使ってみる</a>
  </div>
  <div class="top-button">
    <a href="/login" class="top-button__link">ログイン</a>
  </div>
</div>
@endif