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
      <ul class="detail-nodata">
        <li class="no-data__item no-data__item--link no-data__item--left"><a href="/basicEdit?id={{$company->id}}"
            class="no-data__link">基本情報を編集する</a>
        </li>
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

<div class="wrap">
  <div class="info-box">
    <div class="info-box__ttls">
      <h2 class="info-box__ttl">詳細情報</h2>
    </div>
    @if (isset($detail))
    <div class="info-box__contents">
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">企業理念</span></li>
        <li class="detail__item">{{$detail->corporate_philosophy}}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">主な商品・サービス</span></li>
        <li class="detail__item">{!! nl2br(e($detail->service_product)) !!}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">顧客</span></li>
        <li class="detail__item">{{$detail->to_client}}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">独自性</span></li>
        <li class="detail__item">{!! nl2br(e($detail->uniqueness)) !!}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">今後の展開</span></li>
        <li class="detail__item">{!! nl2br(e($detail->future)) !!}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">企業が大切にしていること</span></li>
        <li class="detail__item">{!! nl2br(e($detail->important_point)) !!}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">価値を感じたところ・魅力的なところ</span></li>
        <li class="detail__item">{!! nl2br(e($detail->feel_value)) !!}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">この企業で自分が与えられる価値</span></li>
        <li class="detail__item">{!! nl2br(e($detail->give_my_value)) !!}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">この会社がまさに悩んでいる課題</span></li>
        <li class="detail__item">{!! nl2br(e($detail->company_task)) !!}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">感じたこと</span></li>
        <li class="detail__item">{!! nl2br(e($detail->memo)) !!}</li>
      </ul>
      <ul class="detail-nodata">
        <li class="no-data__item no-data__item--link no-data__item--left"><a href="/detailEdit?id={{$company->id}}"
            class="no-data__link">詳細情報を編集する</a>
        </li>
      </ul>
    </div>
    @else
    <div class="info-box__contents">
      <ul class="detail-nodata">
        <li class="no-data__item no-data__item--link"><a href="/detailAdd?id={{$company->id}}"
            class="no-data__link">詳細情報を登録する</a></li>
      </ul>
    </div>
    @endif
  </div>
</div>

<div class="wrap">
  <div class="info-box">
    <div class="info-box__ttls">
      <h2 class="info-box__ttl">職種詳細</h2>
    </div>
    @if (isset($wish_jobtype))
    <div class="info-box__contents">
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">希望職種</span></li>
        <li class="detail__item">{{$wish_jobtype->wish_jobtype}}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">希望職種の仕事内容</span></li>
        <li class="detail__item">{!! nl2br(e($wish_jobtype->jobtype_detail)) !!}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">希望職種で自分がやりたいこと</span></li>
        <li class="detail__item">{!! nl2br(e($wish_jobtype->want_jobtype)) !!}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">希望職種で自分ができること</span></li>
        <li class="detail__item">{!! nl2br(e($wish_jobtype->can_jobtype)) !!}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">感じたこと</span></li>
        <li class="detail__item">{!! nl2br(e($wish_jobtype->memo)) !!}</li>
      </ul>
      <ul class="detail-nodata">
        <li class="no-data__item no-data__item--link no-data__item--left"><a href="/wishJobtypeEdit?id={{$company->id}}"
            class="no-data__link">職種詳細を編集する</a>
        </li>
      </ul>
    </div>
    @else
    <div class="info-box__contents">
      <ul class="detail-nodata">
        <li class="no-data__item no-data__item--link"><a href="/wishJobtypeAdd?id={{$company->id}}"
            class="no-data__link">職種詳細を登録する</a></li>
      </ul>
    </div>
    @endif
  </div>
</div>

<div class="wrap">
  <div class="info-box">
    <div class="info-box__ttls">
      <h2 class="info-box__ttl">福利厚生</h2>
    </div>
    @if (isset($welfare))
    <div class="info-box__contents">
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">初任給</span></li>
        <li class="detail__item">{{$welfare->starting_salary}}円</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">年間休日日数</span></li>
        <li class="detail__item">{{$welfare->holidays}}日</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">平均有給日数</span></li>
        <li class="detail__item">{{$welfare->paid_vacation}}日</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">平均残業時間</span></li>
        <li class="detail__item">{{$welfare->overtime}}時間</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">休日形式</span></li>
        <li class="detail__item">{!! nl2br(e($welfare->holidays_format)) !!}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">休暇制度</span></li>
        <li class="detail__item">{!! nl2br(e($welfare->holidays_system)) !!}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">残業時間</span></li>
        <li class="detail__item">{!! nl2br(e($welfare->working_hours)) !!}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">社会保険</span></li>
        <li class="detail__item">{!! nl2br(e($welfare->social_insurance)) !!}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">手当</span></li>
        <li class="detail__item">{!! nl2br(e($welfare->allowance)) !!}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">教育制度</span></li>
        <li class="detail__item">{!! nl2br(e($welfare->education)) !!}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">教育制度</span></li>
        <li class="detail__item">{!! nl2br(e($welfare->get_license)) !!}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">感じたこと</span></li>
        <li class="detail__item">{!! nl2br(e($welfare->memo)) !!}</li>
      </ul>
      <ul class="detail-nodata">
        <li class="no-data__item no-data__item--link no-data__item--left"><a href="/welfareEdit?id={{$company->id}}"
            class="no-data__link">福利厚生を編集する</a>
        </li>
      </ul>
    </div>
    @else
    <div class="info-box__contents">
      <ul class="detail-nodata">
        <li class="no-data__item no-data__item--link"><a href="/welfareAdd?id={{$company->id}}"
            class="no-data__link">福利厚生を登録する</a></li>
      </ul>
    </div>
    @endif
  </div>
</div>

<div class="wrap">
  <div class="info-box">
    <div class="info-box__ttls">
      <h2 class="info-box__ttl">採用情報</h2>
    </div>
    @if (isset($recruitementInfo))
    <div class="info-box__contents">
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">応募職種</span></li>
        <li class="detail__item">{{$recruitementInfo->apply_jobtype}}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">面接回数</span></li>
        <li class="detail__item">{{$recruitementInfo->interview_times}}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">求める人物</span></li>
        <li class="detail__item">{!! nl2br(e($recruitementInfo->want_people)) !!}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">求めるスキル</span></li>
        <li class="detail__item">{!! nl2br(e($recruitementInfo->want_skills)) !!}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">試験内容</span></li>
        <li class="detail__item">{!! nl2br(e($recruitementInfo->test_info)) !!}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">提出書類</span></li>
        <li class="detail__item">{!! nl2br(e($recruitementInfo->handin_documents)) !!}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">志望動機</span></li>
        <li class="detail__item">{!! nl2br(e($recruitementInfo->aspiration_motive)) !!}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">自己PR</span></li>
        <li class="detail__item">{!! nl2br(e($recruitementInfo->pr_point)) !!}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">感じたこと</span></li>
        <li class="detail__item">{!! nl2br(e($recruitementInfo->memo)) !!}</li>
      </ul>
      <ul class="detail-nodata">
        <li class="no-data__item no-data__item--link no-data__item--left"><a
            href="/recruitementInfoEdit?id={{$company->id}}" class="no-data__link">採用情報を編集する</a>
        </li>
      </ul>
    </div>
    @else
    <div class="info-box__contents">
      <ul class="detail-nodata">
        <li class="no-data__item no-data__item--link"><a href="/recruitementInfoAdd?id={{$company->id}}"
            class="no-data__link">採用情報を登録する</a></li>
      </ul>
    </div>
    @endif
  </div>
</div>

<div class="wrap">
  <div class="info-box">
    <div class="info-box__ttls">
      <h2 class="info-box__ttl">説明会・面談情報</h2>
    </div>
    @if (isset($companyInfomationSession))
    <div class="info-box__contents">
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">疑問点</span></li>
        <li class="detail__item">{!! nl2br(e($companyInfomationSession->question_point)) !!}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">会社内の雰囲気</span></li>
        <li class="detail__item">{!! nl2br(e($companyInfomationSession->question_point)) !!}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">会社員の雰囲気</span></li>
        <li class="detail__item">{!! nl2br(e($companyInfomationSession->question_point)) !!}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">メモの内容</span></li>
        <li class="detail__item">{!! nl2br(e($companyInfomationSession->question_point)) !!}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">良かった点</span></li>
        <li class="detail__item">{!! nl2br(e($companyInfomationSession->question_point)) !!}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">違和感を覚えた点</span></li>
        <li class="detail__item">{!! nl2br(e($companyInfomationSession->question_point)) !!}</li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">もっと知りたいこと</span></li>
        <li class="detail__item">{!! nl2br(e($companyInfomationSession->question_point)) !!}</li>
      </ul>
      <ul class="detail-nodata">
        <li class="no-data__item no-data__item--link no-data__item--left"><a
            href="/companyInfomationSessionEdit?id={{$company->id}}" class="no-data__link">説明会・面談情報を編集する</a>
        </li>
      </ul>
    </div>
    @else
    <div class="info-box__contents">
      <ul class="detail-nodata">
        <li class="no-data__item no-data__item--link"><a href="/companyInfomationSessionAdd?id={{$company->id}}"
            class="no-data__link">説明会・面談情報を登録する</a></li>
      </ul>
    </div>
    @endif
  </div>
</div>

<div class="wrap">
  <div class="info-box">
    <div class="info-box__ttls">
      <h2 class="info-box__ttl">質問</h2>
    </div>
    @if (isset($questions))
    <div class="info-box__contents">
      <ul class="detail__list">
        <li class="detail__ttl--box"><span class="detail__ttl">感じたこと</span></li>
        <li class="detail__item">{!! nl2br(e($questions->questions)) !!}</li>
      </ul>
      <ul class="detail-nodata">
        <li class="no-data__item no-data__item--link no-data__item--left"><a href="/questionsEdit?id={{$company->id}}"
            class="no-data__link">質問を編集する</a>
        </li>
      </ul>
    </div>
    @else
    <div class="info-box__contents">
      <ul class="detail-nodata">
        <li class="no-data__item no-data__item--link"><a href="/questionsAdd?id={{$company->id}}"
            class="no-data__link">質問を登録する</a></li>
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
    <a class="bottom-btn__link bottom-btn__link--notnow" href="/myInfo">自分情報</a>
  </div>
</div>