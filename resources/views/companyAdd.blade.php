<div class="page-top">
  <h1 class="page-top__ttl">企業情報登録</h1>
</div>
<div class="info-box">
  <div class="info-box__contents">
    <form action="companyAdd" method="POST">
      @csrf
      <ul class="company__list">
        <li class="comapny__ttl">企業名</li>
        <li class="company__item"><input type="text" name="company_name" value="{{old('company_name')}}"></li>
        @if($errors->has('company_name'))
        <li class="comapny__error">{{$errors->first('company_name')}}</li>
        @endif
      </ul>
      <ul class="company__list">
        <li class="comapny__ttl">キギョウヒトコト</li>
        <li class="company__item"><input type="text" name="hitokoto" value="{{old('hitokoto')}}"></li>
        @if($errors->has('hitokoto'))
        <li class="comapny__error">{{$errors->first('hitokoto')}}</li>
        @endif
      </ul>
      <ul class="company__list">
        <li class="comapny__ttl">業種</li>
        <li class="company__item"><input type="text" name="industry" value="{{old('industry')}}"></li>
        @if($errors->has('industry'))
        <li class="comapny__error">{{$errors->first('industry')}}</li>
        @endif
      </ul>
      <ul class="company__list">
        <li class="comapny__ttl">職種</li>
        <li class="company__item"><input type="text" name="jobtype" value="{{old('jobtype')}}"></li>
        @if($errors->has('jobtype'))
        <li class="comapny__error">{{$errors->first('jobtype')}}</li>
        @endif
      </ul>
      <ul class="company__list">
        <li class="comapny__ttl">本社</li>
        <li class="company__item"><input type="text" name="headoffice_place" value="{{old('headoffice_place')}}"></li>
        @if($errors->has('headoffice_place'))
        <li class="comapny__error">{{$errors->first('headoffice_place')}}</li>
        @endif
      </ul>
      <ul class="company__list">
        <li class="comapny__ttl">現在の状況</li>
        <li class="company__item">
          <select name="status">
            <option value="">現在の状況を選択してください</option>
            <option value="setsumeikai" @if(old('status')=='setsumeikai' ) selected @endif>（エントリーせずに）説明会・面談に参加</option>
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
        </li>
        @if($errors->has('status'))
        <li class="comapny__error">{{$errors->first('status')}}</li>
        @endif
      </ul>
      <ul class="company__list">
        <li class="company__item--send"><input type="submit" value="登録"></li>
      </ul>
    </form>
  </div>
</div>