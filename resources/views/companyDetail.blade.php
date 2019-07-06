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
    <h1 class="page-top__ttl">企業情報詳細</h1>
    <p class="page-top__company-name">{{$company->company_name}}</p>
  </div>
</div>

<div class="wrap">
  <div class="info-box">
    <div class="info-box__ttls">
      <h2 class="info-box__ttl">総合情報</h2>
    </div>
    <div class="info-box__contents">
      <div class="detail__top">
        @if(app('env')=='local')
        <img class="detail__status" src="{{ asset('/image/' . $company->status . '.svg') }}">
        @endif
        @if(app('env')=='production')
        <img class="detail__status" src="{{ secure_asset('/image/' . $company->status . '.svg') }}">
        @endif
        <div class="detail__about">
          <span class="detail__hitokoto">{{$company->hitokoto}}</span>
          <h2 class="detail__name">{{$company->company_name}}</h2>
        </div>
      </div>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">業種</span></li>
        <li class="detail__item">{{$company->industry}}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">職種</span></li>
        <li class="detail__item">{{$company->jobtype}}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">本社</span></li>
        <li class="detail__item">{{$basic->headoffice_place}}</li>
      </ul>
      <ul class="detail-nodata">
        <li class="no-data__item no-data__item--link no-data__item--left"><a href="/companyEdit?id={{$company->id}}"
            class="no-data__link">総合情報を編集する</a>
        </li>
      </ul>
    </div>
  </div>
</div>

<div class="wrap">
  <div class="info-box">
    <div class="info-box__ttls">
      <h2 class="info-box__ttl">基本情報</h2>
    </div>
    @if (isset($basic->website_url))
    <div class="info-box__contents">
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">webサイト</span></li>
        <li class="detail__item"><a class="detail__link" href="{{$basic->website_url}}"
            target="_blank">{{$basic->website_url}}</a>
        </li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">創立年</span></li>
        <li class="detail__item">{{$basic->founding_year . '年'}}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">資本金</span></li>
        <li class="detail__item">{{number_format($basic->capital) . '円'}}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">代表者</span></li>
        <li class="detail__item">{{$basic->representative}}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">従業員数</span></li>
        <li class="detail__item">{{$basic->employees_number . '人'}}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">本社</span></li>
        <li class="detail__item">{{$basic->headoffice_place . '本社'}}</li>
        <li class="detail__item">〒{{$basic->headoffice_postalcode_first . '-' . $basic->headoffice_postalcode_last}}
        </li>
        <li class="detail__item">{{$basic->headoffice_address}}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">株式公開・上場</span></li>
        <li class="detail__item">{{$basic->stock_listing}}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">感じたこと</span></li>
        <li class="detail__item">{!! nl2br(e($basic->memo)) !!}</li>
      </ul>
    </div>
    @else
    <div class="info-box__contents">
      <ul class="detail-nodata">
        <li class="no-data__item no-data__item--link"><a href="/basicAdd?id={{$company->id}}"
            class="no-data__link">基本情報を登録する</a></li>
      </ul>
    </div>
    @endif
  </div>
</div>

<div class="bottom-btn">
  <div class="bottom-btn--now">
    <a class="bottom-btn__link bottom-btn__link--now" href="/">企業情報</a>
  </div>
  <div class="bottom-btn--notnow">
    <a class="bottom-btn__link bottom-btn__link--notnow" href="/">自分情報</a>
  </div>
</div>