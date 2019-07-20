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
    <h1 class="page-top__ttl">詳細情報編集</h1>
    <p class="page-top__company-name">{{$company_name}}</p>
  </div>
</div>

<div class="wrap">
  <div class="company__box company__box--add">
    @if($errors->isEmpty())
    <form action="wishJobtypeEdit" method="POST">
      @csrf
      <ul class="detail__list">
        <li class="detail__item"><input class="add-input" type="hidden" name="company_id"
            value="{{$wishJobtype->company_id}}"></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">希望職種</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="wish_jobtype"
            value="{{$wishJobtype->wish_jobtype}}">
        </li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">希望職種の仕事内容</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="jobtype_detail" id="" cols="30"
            rows="10">{{$wishJobtype->jobtype_detail}}</textarea></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">希望職種で自分がやりたいこと</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="want_jobtype" id="" cols="30"
            rows="10">{{$wishJobtype->want_jobtype}}</textarea></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">希望職種で自分ができること</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="can_jobtype" id="" cols="30"
            rows="10">{{$wishJobtype->can_jobtype}}</textarea></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">感じたこと</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="memo" id="" cols="30"
            rows="10">{{$wishJobtype->memo}}</textarea></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__item--send">
          <a href="/companyDetail?id={{$wishJobtype->company_id}}" class="submit-button__add">戻る</a>
          <input class="submit-button__add" type="submit" value="変更する">
        </li>
      </ul>
    </form>

    @else
    <form action="wishJobtypeEdit" method="POST">
      @csrf
      <ul class="detail__list">
        <li class="detail__item"><input class="add-input" type="hidden" name="company_id"
            value="{{$wishJobtype->company_id}}"></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__item"><input class="add-input" type="hidden" name="company_id" value="{{$company_id}}"></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">希望職種</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="wish_jobtype"
            value="{{old('wish_jobtype')}}">
        </li>
        @if($errors->has('wish_jobtype'))
        <li class="detail__error">{{$errors->first('wish_jobtype')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">希望職種の仕事内容</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="jobtype_detail" id="" cols="30"
            rows="10">{{old('jobtype_detail')}}</textarea></li>
        @if($errors->has('jobtype_detail'))
        <li class="detail__error">{{$errors->first('jobtype_detail')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">* 希望職種で自分がやりたいこと</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="want_jobtype" id="" cols="30"
            rows="10">{{old('want_jobtype')}}</textarea></li>
        @if($errors->has('want_jobtype'))
        <li class="detail__error">{{$errors->first('want_jobtype')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">希望職種で自分ができること</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="can_jobtype" id="" cols="30"
            rows="10">{{old('can_jobtype')}}</textarea></li>
        @if($errors->has('can_jobtype'))
        <li class="detail__error">{{$errors->first('can_jobtype')}}</li>
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
          <a href="/companyDetail?id={{$wishJobtype->comapny_id}}" class="submit-button__add">戻る</a>
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