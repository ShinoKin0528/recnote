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
    <h1 class="page-top__ttl">自分情報情報</h1>
  </div>
</div>

<div class="wrap">
  <div class="info-box">
    @if ($myInfo !== NULL)
    <div class="info-box__contents">
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">企業業種</span></li>
        <li class="detail__item">{{$myInfo->hope_industry}}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">希望職種</span></li>
        <li class="detail__item">{{$myInfo->hope_job_type}}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">将来の自分について</span></li>
        <li class="detail__item">{!! nl2br(e($myInfo->what_future)) !!}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">自分の強み</span></li>
        <li class="detail__item">{{$myInfo->strength}}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">自分の強みに対する具体的エピソード</span></li>
        <li class="detail__item">{!! nl2br(e($myInfo->strength_detail)) !!}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">自分の強みがどう仕事に活かせそうか</span></li>
        <li class="detail__item">{!! nl2br(e($myInfo->strength_job)) !!}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">学生時代に勉強してきたこと</span></li>
        <li class="detail__item">{{$myInfo->study}}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">勉強内容</span></li>
        <li class="detail__item">{!! nl2br(e($myInfo->study_detail)) !!}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">学生時代に研究してきたこと</span></li>
        <li class="detail__item">{{$myInfo->research}}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">研究内容</span></li>
        <li class="detail__item">{!! nl2br(e($myInfo->research_detail)) !!}</li>
      </ul>
      <ul class="detail-nodata">
        <li class="no-data__item no-data__item--link no-data__item--left"><a href="/myInfoEdit"
            class="no-data__link">自分情報を編集する</a>
        </li>
      </ul>
    </div>
    @else
    <div class="info-box__contents">
      <ul class="detail-nodata">
        <li class="no-data__item no-data__item--link"><a href="/myInfoAdd" class="no-data__link">自分情報を登録する</a></li>
      </ul>
    </div>
    @endif
  </div>
</div>

<div class="bottom-btn">
  <div class="bottom-btn--notnow">
    <a class="bottom-btn__link bottom-btn__link--notnow" href="/">企業情報</a>
  </div>
  <div class="bottom-btn--now">
    <a class="bottom-btn__link bottom-btn__link--now" href="/">自分情報</a>
  </div>
</div>