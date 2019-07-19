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
    <h1 class="page-top__ttl">基本情報編集</h1>
    <p class="page-top__company-name">{{$company_name}}</p>
  </div>
</div>

<div class="wrap">
  <div class="company__box company__box--add">
    @if($errors->isEmpty())
    <form action="detailEdit" method="POST">
      @csrf
      <ul class="detail__list">
        <li class="detail__item"><input class="add-input" type="hidden" name="company_id"
            value="{{$detail->company_id}}"></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">企業理念</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="corporate_philosophy"
            value="{{$detail->corporate_philosophy}}">
        </li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">* 主な商品・サービス（名前、内容）</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="service_product" id="" cols="30"
            rows="10">{{$detail->service_product}}</textarea></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">顧客（BtoB、BtoC）</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="to_client" value="{{$detail->to_client}}">
        </li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">独自性（企業の特徴）</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="uniqueness" id="" cols="30"
            rows="10">{{$detail->uniqueness}}</textarea></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">今後の展開</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="future" id="" cols="30"
            rows="10">{{$detail->future}}</textarea></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">企業が大切にしていること</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="important_point" id="" cols="30"
            rows="10">{{$detail->important_point}}</textarea></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">価値を感じたところ・魅力的なところ</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="feel_value" id="" cols="30"
            rows="10">{{$detail->feel_value}}</textarea></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">この企業で自分が与えられる価値</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="give_my_value" id="" cols="30"
            rows="10">{{$detail->give_my_value}}</textarea></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">この会社がまさに悩んでいる課題</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="company_task" id="" cols="30"
            rows="10">{{$detail->company_task}}</textarea></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">感じたこと</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="memo" id="" cols="30"
            rows="10">{{$detail->memo}}</textarea></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__item--send">
          <a href="/companyDetail?id={{$detail->company_id}}" class="submit-button__add">戻る</a>
          <input class="submit-button__add" type="submit" value="変更する">
        </li>
      </ul>
    </form>
    @else
    <form action="detailEdit" method="POST">
      @csrf
      <ul class="detail__list">
        <li class="detail__item"><input class="add-input" type="hidden" name="company_id"
            value="{{$detail->company_id}}"></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">企業理念</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="corporate_philosophy"
            value="{{old('corporate_philosophy')}}">
        </li>
        @if($errors->has('corporate_philosophy'))
        <li class="detail__error">{{$errors->first('corporate_philosophy')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">* 主な商品・サービス（名前、内容）</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="service_product" id="" cols="30"
            rows="10">{{old('service_product')}}</textarea></li>
        @if($errors->has('service_product'))
        <li class="detail__error">{{$errors->first('service_product')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">顧客（BtoB、BtoC）</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="to_client" value="{{old('to_client')}}">
        </li>
        @if($errors->has('to_client'))
        <li class="detail__error">{{$errors->first('to_client')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">独自性（企業の特徴）</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="uniqueness" id="" cols="30"
            rows="10">{{old('uniqueness')}}</textarea></li>
        @if($errors->has('uniqueness'))
        <li class="detail__error">{{$errors->first('uniqueness')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">今後の展開</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="future" id="" cols="30"
            rows="10">{{old('future')}}</textarea></li>
        @if($errors->has('future'))
        <li class="detail__error">{{$errors->first('future')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">企業が大切にしていること</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="important_point" id="" cols="30"
            rows="10">{{old('important_point')}}</textarea></li>
        @if($errors->has('important_point'))
        <li class="detail__error">{{$errors->first('important_point')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">価値を感じたところ・魅力的なところ</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="feel_value" id="" cols="30"
            rows="10">{{old('feel_value')}}</textarea></li>
        @if($errors->has('feel_value'))
        <li class="detail__error">{{$errors->first('feel_value')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">この企業で自分が与えられる価値</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="give_my_value" id="" cols="30"
            rows="10">{{old('give_my_value')}}</textarea></li>
        @if($errors->has('give_my_value'))
        <li class="detail__error">{{$errors->first('give_my_value')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">この会社がまさに悩んでいる課題</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="company_task" id="" cols="30"
            rows="10">{{old('company_task')}}</textarea></li>
        @if($errors->has('company_task'))
        <li class="detail__error">{{$errors->first('company_task')}}</li>
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
          <a href="/companyDetail?id={{$detail->comapny_id}}" class="submit-button__add">戻る</a>
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