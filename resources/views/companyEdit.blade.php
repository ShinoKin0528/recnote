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
    <h1 class="page-top__ttl">企業総合情報編集</h1>
    <p class="page-top__company-name">{{$company->company_name}}</p>
  </div>
</div>

<div class="wrap">
  <div class="company__box company__box--add">
    @if($errors->isEmpty())
    <form action="companyEdit" method="POST">
      <input type="hidden" name="id" value="{{$company->id}}">
      @csrf
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">企業名</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="company_name"
            value="{{$company->company_name}}"></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">キギョウヒトコト</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="hitokoto" value="{{$company->hitokoto}}">
        </li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">業種</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="industry" value="{{$company->industry}}">
        </li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">職種</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="jobtype" value="{{$company->jobtype}}"></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">現在の状況</span></li>
        <li class="detail__item">
          <div class="select-box">
            <select name="status">
              <option value="">現在の状況を選択してください</option>
              <option value="setsumeikai" @if($company->status=='setsumeikai' ) selected @endif>（エントリーせずに）説明会・面談に参加
              </option>
              <option value="entry" @if($company->status=='entry' ) selected @endif>エントリー</option>
              <option value="shorui" @if($company->status=='shorui' ) selected @endif>書類選考</option>
              <option value="ichiji" @if($company->status=='ichiji' ) selected @endif>一次面接</option>
              <option value="niji" @if($company->status=='niji' ) selected @endif>二次面接</option>
              <option value="sanji" @if($company->status=='sanji' ) selected @endif>三次面接</option>
              <option value="yoji" @if($company->status=='yoji' ) selected @endif>四次面接</option>
              <option value="saishuu" @if($company->status=='saishuu' ) selected @endif>最終面接</option>
              <option value="naitei" @if($company->status=='naitei' ) selected @endif>内定</option>
              <option value="oinori" @if($company->status=='oinori' ) selected @endif>お祈り</option>
            </select>
          </div>
        </li>
      </ul>
      <ul class="detail__list">
        <li class="detail__item--send">
          <a href="/companyDetail?id={{$company->id}}" class="submit-button__add">戻る</a>
          <input class="submit-button__add" type="submit" value="変更する">
        </li>
      </ul>
    </form>

    <!--バリデーションエラーがある場合-->
    @else
    <form action="companyAdd" method="POST">
      @csrf
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">企業名</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="company_name"
            value="{{old('company_name')}}"></li>
        @if($errors->has('company_name'))
        <li class="detail__error">{{$errors->first('company_name')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">キギョウヒトコト</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="hitokoto" value="{{old('hitokoto')}}"></li>
        @if($errors->has('hitokoto'))
        <li class="detail__error">{{$errors->first('hitokoto')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">業種</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="industry" value="{{old('industry')}}"></li>
        @if($errors->has('industry'))
        <li class="detail__error">{{$errors->first('industry')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">職種</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="jobtype" value="{{old('jobtype')}}"></li>
        @if($errors->has('jobtype'))
        <li class="detail__error">{{$errors->first('jobtype')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">現在の状況</span></li>
        <li class="detail__item">
          <div class="select-box">
            <select name="status">
              <option value="">現在の状況を選択してください</option>
              <option value="setsumeikai" @if(old('status')=='setsumeikai' ) selected @endif>（エントリーせずに）説明会・面談に参加
              </option>
              <option value="entry" @if(old('status')=='entry' ) selected @endif>エントリー</option>
              <option value="shorui" @if(old('status')=='shorui' ) selected @endif>書類選考</option>
              <option value="ichiji" @if(old('status')=='ichiji' ) selected @endif>一次面接</option>
              <option value="niji" @if(old('status')=='niji' ) selected @endif>二次面接</option>
              <option value="sanji" @if(old('status')=='sanji' ) selected @endif>三次面接</option>
              <option value="yoji" @if(old('status')=='yoji' ) selected @endif>四次面接</option>
              <option value="saishuu" @if(old('status')=='saishuu' ) selected @endif>最終面接</option>
              <option value="naitei" @if(old('status')=='naitei' ) selected @endif>内定</option>
              <option value="oinori" @if(old('status')=='oinori' ) selected @endif>お祈り</option>
            </select>
          </div>
        </li>
        @if($errors->has('status'))
        <li class="detail__error">{{$errors->first('status')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__item--send">
          <a href="/companyDetail?id={{$company->id}}" class="submit-button__add">戻る</a>
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
    <a class="bottom-btn__link bottom-btn__link--notnow" href="/">自分情報</a>
  </div>
</div>