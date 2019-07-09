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
    <h1 class="page-top__ttl">自分情報登録</h1>
  </div>
</div>
<div class="wrap">
  <div class="company__box company__box--add">
    @if($errors->isEmpty())
    <form action="myInfoEdit" method="POST">
      @csrf
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">希望業種</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="hope_industry"
            value="{{$myInfo->hope_industry}}"></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">希望職種</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="hope_job_type"
            value="{{$myInfo->hope_job_type}}"></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">将来の自分について</span></li>
        <li class="detail__item"><textarea name="what_future" id="" cols="30"
            rows="10">{{$myInfo->what_future}}</textarea></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">自分の強み</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="strength" value="{{$myInfo->strength}}">
        </li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">自分の強みに対する具体的エピソード</span></li>
        <li class="detail__item"><textarea name="strength_detail" id="" cols="30"
            rows="10">{{$myInfo->strength_detail}}</textarea></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">自分の強みがどう仕事に活かせそうか</span></li>
        <li class="detail__item"><textarea name="strength_job" id="" cols="30"
            rows="10">{{$myInfo->strength_job}}</textarea></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">学生時代に勉強してきたこと</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="study" value="{{$myInfo->study}}"></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">勉強内容</span></li>
        <li class="detail__item"><textarea name="study_detail" id="" cols="30"
            rows="10">{{$myInfo->study_detail}}</textarea></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">学生時代に研究してきたこと</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="research" value="{{$myInfo->research}}">
        </li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">研究内容</span></li>
        <li class="detail__item"><textarea name="research_detail" id="" cols="30"
            rows="10">{{$myInfo->research_detail}}</textarea></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__item--send">
          <a href="/myInfo" class="submit-button__add">戻る</a>
          <input class="submit-button__add" type="submit" value="編集する">
        </li>
      </ul>
    </form>
    @else
    <form action="myInfoEdit" method="POST">
      @csrf
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">希望業種</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="hope_industry"
            value="{{old('hope_industry')}}"></li>
        @if($errors->has('hope_industry'))
        <li class="detail__error">{{$errors->first('hope_industry')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">希望職種</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="hope_job_type"
            value="{{old('hope_job_type')}}"></li>
        @if($errors->has('hope_job_type'))
        <li class="detail__error">{{$errors->first('hope_job_type')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">将来の自分について</span></li>
        <li class="detail__item"><textarea name="what_future" id="" cols="30"
            rows="10">{{old('what_future')}}</textarea></li>
        @if($errors->has('what_future'))
        <li class="detail__error">{{$errors->first('what_future')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">自分の強み</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="strength" value="{{old('strength')}}"></li>
        @if($errors->has('strength'))
        <li class="detail__error">{{$errors->first('strength')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">自分の強みに対する具体的エピソード</span></li>
        <li class="detail__item"><textarea name="strength_detail" id="" cols="30"
            rows="10">{{old('strength_detail')}}</textarea></li>
        @if($errors->has('strength_detail'))
        <li class="detail__error">{{$errors->first('strength_detail')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">自分の強みがどう仕事に活かせそうか</span></li>
        <li class="detail__item"><textarea name="strength_job" id="" cols="30"
            rows="10">{{old('strength_job')}}</textarea></li>
        @if($errors->has('strength_job'))
        <li class="detail__error">{{$errors->first('strength_job')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">学生時代に勉強してきたこと</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="study" value="{{old('study')}}"></li>
        @if($errors->has('study'))
        <li class="detail__error">{{$errors->first('study')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">勉強内容</span></li>
        <li class="detail__item"><textarea name="study_detail" id="" cols="30"
            rows="10">{{old('study_detail')}}</textarea></li>
        @if($errors->has('study_detail'))
        <li class="detail__error">{{$errors->first('study_detail')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">学生時代に研究してきたこと</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="research" value="{{old('research')}}"></li>
        @if($errors->has('research'))
        <li class="detail__error">{{$errors->first('research')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">研究内容</span></li>
        <li class="detail__item"><textarea name="research_detail" id="" cols="30"
            rows="10">{{old('research_detail')}}</textarea></li>
        @if($errors->has('research_detail'))
        <li class="detail__error">{{$errors->first('research_detail')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__item--send">
          <a href="/myInfo" class="submit-button__add">戻る</a>
          <input class="submit-button__add" type="submit" value="編集する">
        </li>
      </ul>
    </form>
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