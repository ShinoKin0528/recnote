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
    <h1 class="page-top__ttl">説明会・面談情報編集</h1>
    <p class="page-top__company-name">{{$company_name}}</p>
  </div>
</div>

<div class="wrap">
  <div class="company__box company__box--add">
    @if($errors->isEmpty())
    <form action="companyInfomationSessionEdit" method="POST">
      @csrf
      <ul class="detail__list">
        <li class="detail__item"><input class="add-input" type="hidden" name="company_id"
            value="{{$companyInfomationSession->company_id}}"></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">疑問点</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="question_point" id="" cols="30"
            rows="10">{{$companyInfomationSession->question_point}}</textarea></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">会社内の雰囲気</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="company_atmosphere" id="" cols="30"
            rows="10">{{$companyInfomationSession->company_atmosphere}}</textarea></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">会社員の雰囲気</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="employees_atmosphere" id="" cols="30"
            rows="10">{{$companyInfomationSession->employees_atmosphere}}</textarea></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">メモの内容</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="memo" id="" cols="30"
            rows="10">{{$companyInfomationSession->memo}}</textarea></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">良かった点</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="good_point" id="" cols="30"
            rows="10">{{$companyInfomationSession->good_point}}</textarea></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">違和感を覚えた点</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="bad_point" id="" cols="30"
            rows="10">{{$companyInfomationSession->bad_point}}</textarea></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">もっと知りたいこと</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="know_more" id="" cols="30"
            rows="10">{{$companyInfomationSession->know_more}}</textarea></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__item--send">
          <a href="/companyDetail?id={{$companyInfomationSession->company_id}}" class="submit-button__add">戻る</a>
          <input class="submit-button__add" type="submit" value="変更する">
        </li>
      </ul>
    </form>

    @else
    <form action="companyInfomationSessionEdit" method="POST">
      @csrf
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">疑問点</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="question_point" id="" cols="30"
            rows="10">{{old('question_point')}}</textarea></li>
        @if($errors->has('question_point'))
        <li class="detail__error">{{$errors->first('question_point')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">会社内の雰囲気</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="company_atmosphere" id="" cols="30"
            rows="10">{{old('company_atmosphere')}}</textarea></li>
        @if($errors->has('company_atmosphere'))
        <li class="detail__error">{{$errors->first('company_atmosphere')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">会社員の雰囲気</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="employees_atmosphere" id="" cols="30"
            rows="10">{{old('employees_atmosphere')}}</textarea></li>
        @if($errors->has('employees_atmosphere'))
        <li class="detail__error">{{$errors->first('employees_atmosphere')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">メモの内容</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="memo" id="" cols="30"
            rows="10">{{old('memo')}}</textarea></li>
        @if($errors->has('memo'))
        <li class="detail__error">{{$errors->first('memo')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">良かった点</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="good_point" id="" cols="30"
            rows="10">{{old('good_point')}}</textarea></li>
        @if($errors->has('good_point'))
        <li class="detail__error">{{$errors->first('good_point')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">違和感を覚えた点</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="bad_point" id="" cols="30"
            rows="10">{{old('bad_point')}}</textarea></li>
        @if($errors->has('bad_point'))
        <li class="detail__error">{{$errors->first('bad_point')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">もっと知りたいこと</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="know_more" id="" cols="30"
            rows="10">{{old('know_more')}}</textarea></li>
        @if($errors->has('know_more'))
        <li class="detail__error">{{$errors->first('know_more')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__item--send">
          <a href="/companyDetail?id={{$companyInfomationSession->comapny_id}}" class="submit-button__add">戻る</a>
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