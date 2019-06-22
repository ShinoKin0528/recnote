<div class="page-top">
  <h1 class="page-top__ttl">企業情報詳細</h1>
  <p class="page-top__company-name">{{$company->company_name}}</p>
</div>
<div class="info-box">
  <div class="info-box__ttls">
    <h2 class="info-box__ttl">総合情報</h2>
  </div>
  <div class="info-box__contents">
    <div class="company__top">
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
    <ul class="company__list">
      <li class="comapny__ttl">業種</li>
      <li class="company__item">{{$company->industry}}</li>
    </ul>
    <ul class="company__list">
      <li class="comapny__ttl">職種</li>
      <li class="company__item">{{$company->jobtype}}</li>
    </ul>
    <ul class="company__list">
      <li class="comapny__ttl">本社</li>
      <li class="company__item">{{$basic->headoffice_place}}</li>
    </ul>
  </div>
</div>
<div class="info-box">
  <div class="info-box__ttls">
    <h2 class="info-box__ttl">基本情報</h2>
  </div>
  @if (isset($basic))
  <div class="info-box__contents">
    <ul class="company__list">
      <li class="comapny__ttl">webサイト</li>
      <li class="company__item"><a class="company__link" href="{{$basic->webiste_url}}">{{$basic->website_url}}</a></li>
    </ul>
    <ul class="company__list">
      <li class="comapny__ttl">創立年</li>
      <li class="company__item">{{$basic->founding_year . '年'}}</li>
    </ul>
    <ul class="company__list">
      <li class="comapny__ttl">資本金</li>
      <li class="company__item">{{number_format($basic->capital) . '円'}}</li>
    </ul>
    <ul class="company__list">
      <li class="comapny__ttl">代表者</li>
      <li class="company__item">{{$basic->representative}}</li>
    </ul>
    <ul class="company__list">
      <li class="comapny__ttl">従業員数</li>
      <li class="company__item">{{$basic->employees_number . '人'}}</li>
    </ul>
    <ul class="company__list">
      <li class="comapny__ttl">本社</li>
      <li class="company__item">{{$basic->headoffice_place . '本社'}}</li>
      <li class="company__item">〒{{$basic->headoffice_postalcode_first . '-' . $basic->headoffice_postalcode_last}}</li>
      <li class="company__item">{{$basic->headoffice_address}}</li>
    </ul>
    <ul class="company__list">
      <li class="comapny__ttl">株式公開・上場</li>
      <li class="company__item">{{$basic->stock_listing}}</li>
    </ul>
    <ul class="company__list">
      <li class="comapny__ttl">感じた事</li>
      <li class="company__item">{{$basic->memo}}</li>
    </ul>
  </div>
  @else
  <p>no</p>
  @endif
</div>

<a href="/">トップ</a>