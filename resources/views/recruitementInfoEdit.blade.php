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
    <h1 class="page-top__ttl">採用情報編集</h1>
    <p class="page-top__company-name">{{$company_name}}</p>
  </div>
</div>

<div class="wrap">
  <div class="company__box company__box--add">
    @if($errors->isEmpty())
    <form action="recruitementInfoEdit" method="POST">
      @csrf
      <ul class="detail__list">
        <li class="detail__item"><input class="add-input" type="hidden" name="company_id"
            value="{{$recruitementInfo->company_id}}"></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">応募職種</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="apply_jobtype"
            value="{{$recruitementInfo->apply_jobtype}}"></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">面接回数</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="interview_times"
            value="{{$recruitementInfo->interview_times}}"></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">求める人物</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="want_people" id="" cols="30"
            rows="10">{{$recruitementInfo->want_people}}</textarea></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">求めるスキル</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="want_skills" id="" cols="30"
            rows="10">{{$recruitementInfo->want_skills}}</textarea></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">試験内容</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="test_info" id="" cols="30"
            rows="10">{{$recruitementInfo->test_info}}</textarea></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">提出書類</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="handin_documents" id="" cols="30"
            rows="10">{{$recruitementInfo->handin_documents}}</textarea></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">志望動機</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="aspiration_motive" id="" cols="30"
            rows="10">{{$recruitementInfo->aspiration_motive}}</textarea></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">自己PR</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="pr_point" id="" cols="30"
            rows="10">{{$recruitementInfo->pr_point}}</textarea></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">感じたこと</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="memo" id="" cols="30"
            rows="10">{{$recruitementInfo->memo}}</textarea></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__item--send">
          <a href="/companyDetail?id={{$recruitementInfo->company_id}}" class="submit-button__add">戻る</a>
          <input class="submit-button__add" type="submit" value="変更する">
        </li>
      </ul>
    </form>
    @else
    <form action="recruitementInfoEdit" method="POST">
      @csrf
      <ul class="detail__list">
        <li class="detail__item"><input class="add-input" type="hidden" name="company_id"
            value="{{$recruitementInfo->company_id}}"></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">応募職種</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="apply_jobtype"
            value="{{old('apply_jobtype')}}"></li>
        @if($errors->has('apply_jobtype'))
        <li class="detail__error">{{$errors->first('apply_jobtype')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">面接回数</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="interview_times"
            value="{{old('interview_times')}}"></li>
        @if($errors->has('interview_times'))
        <li class="detail__error">{{$errors->first('interview_times')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">求める人物</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="want_people" id="" cols="30"
            rows="10">{{old('want_people')}}</textarea></li>
        @if($errors->has('want_people'))
        <li class="detail__error">{{$errors->first('want_people')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">求めるスキル</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="want_skills" id="" cols="30"
            rows="10">{{old('want_skills')}}</textarea></li>
        @if($errors->has('want_skills'))
        <li class="detail__error">{{$errors->first('want_skills')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">試験内容</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="test_info" id="" cols="30"
            rows="10">{{old('test_info')}}</textarea></li>
        @if($errors->has('test_info'))
        <li class="detail__error">{{$errors->first('test_info')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">提出書類</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="handin_documents" id="" cols="30"
            rows="10">{{old('handin_documents')}}</textarea></li>
        @if($errors->has('handin_documents'))
        <li class="detail__error">{{$errors->first('handin_documents')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">志望動機</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="aspiration_motive" id="" cols="30"
            rows="10">{{old('aspiration_motive')}}</textarea></li>
        @if($errors->has('aspiration_motive'))
        <li class="detail__error">{{$errors->first('aspiration_motive')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">自己PR</span></li>
        <li class="detail__item"><textarea class="add-textarea" name="pr_point" id="" cols="30"
            rows="10">{{old('pr_point')}}</textarea></li>
        @if($errors->has('pr_point'))
        <li class="detail__error">{{$errors->first('pr_point')}}</li>
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
          <a href="/companyDetail?id={{$recruitementInfo->comapny_id}}" class="submit-button__add">戻る</a>
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