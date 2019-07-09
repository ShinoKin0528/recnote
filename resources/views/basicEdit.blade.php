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
    <form action="basicEdit" method="POST">
      @csrf
      <ul class="detail__list">
        <li class="detail__item"><input class="add-input" type="hidden" name="company_id"
            value="{{$basic->company_id}}"></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">ウェブサイトURL</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="website_url"
            value="{{$basic->website_url}}">
        </li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">創立年</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="founding_year"
            value="{{$basic->founding_year}}"></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">資本金</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="capital" value="{{$basic->capital}}"></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">代表者</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="representative"
            value="{{$basic->representative}}"></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">従業員数</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="employees_number"
            value="{{$basic->employees_number}}"></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">本社（都道府県／国）</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="headoffice_place"
            value="{{$basic->headoffice_place}}"></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">郵便番号</span></li>
        <li class="detail__item">〒 <input class="add-input" type="text" name="headoffice_postalcode_first"
            value="{{$basic->headoffice_postalcode_first}}"> - <input class="add-input" type="text"
            name="headoffice_postalcode_last" value="{{$basic->headoffice_postalcode_last}}"></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">本社住所</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="headoffice_address"
            value="{{$basic->headoffice_address}}"></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">株式公開</span></li>
        <li class="detail__item">
          <div class="select-box">
            <select name="stock_listing">
              <option value="非上場" @if($basic->stock_listing=='非上場' ) selected @endif>非上場</option>
              <option value="東証一部／東証二部" @if($basic->stock_listing=='東証一部／東証二部' ) selected @endif>東証一部／東証二部</option>
              <option value="マザーズ／JASDAQ" @if($basic->stock_listing=='マザーズ／JASDAQ' ) selected @endif>マザーズ／JASDAQ
              </option>
              <option value="名古屋・札幌・福岡" @if($basic->stock_listing=='名古屋・札幌・福岡' ) selected @endif>名古屋・札幌・福岡</option>
            </select>
          </div>
        </li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">感じたこと</span></li>
        <li class="detail__item"><textarea name="memo" id="" cols="30" rows="10">{{$basic->memo}}</textarea></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__item--send">
          <a href="/companyDetail?id={{$basic->company_id}}" class="submit-button__add">戻る</a>
          <input class="submit-button__add" type="submit" value="変更する">
        </li>
      </ul>
    </form>
    @else
    <form action="basicEdit" method="POST">
      @csrf
      <ul class="detail__list">
        <li class="detail__item"><input class="add-input" type="hidden" name="company_id"
            value="{{$basic->company_id}}"></li>
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">ウェブサイトURL</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="website_url" value="{{old('website_url')}}">
        </li>
        @if($errors->has('website_url'))
        <li class="detail__error">{{$errors->first('website_url')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">創立年</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="founding_year"
            value="{{old('founding_year')}}"></li>
        @if($errors->has('founding_year'))
        <li class="detail__error">{{$errors->first('founding_year')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">資本金</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="capital" value="{{old('capital')}}"></li>
        @if($errors->has('capital'))
        <li class="detail__error">{{$errors->first('capital')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">代表者</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="representative"
            value="{{old('representative')}}"></li>
        @if($errors->has('representative'))
        <li class="detail__error">{{$errors->first('representative')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">従業員数</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="employees_number"
            value="{{old('employees_number')}}"></li>
        @if($errors->has('employees_number'))
        <li class="detail__error">{{$errors->first('employees_number')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">本社（都道府県／国）</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="headoffice_place"
            value="{{old('headoffice_place')}}"></li>
        @if($errors->has('headoffice_place'))
        <li class="detail__error">{{$errors->first('headoffice_place')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">郵便番号</span></li>
        <li class="detail__item">〒 <input class="add-input" type="text" name="headoffice_postalcode_first"
            value="{{old('headoffice_postalcode_first')}}"> - <input class="add-input" type="text"
            name="headoffice_postalcode_last" value="{{old('headoffice_postalcode_last')}}"></li>
        @if($errors->has('headoffice_postalcode_first'))
        <li class="detail__error">{{$errors->first('headoffice_postalcode_first')}}</li>
        @endif
        @if($errors->has('headoffice_postalcode_last'))
        <li class="detail__error">{{$errors->first('headoffice_postalcode_last')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">本社住所</span></li>
        <li class="detail__item"><input class="add-input" type="text" name="headoffice_address"
            value="{{old('headoffice_address')}}"></li>
        @if($errors->has('headoffice_address'))
        <li class="detail__error">{{$errors->first('headoffice_address')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">株式公開</span></li>
        <li class="detail__item">
          <div class="select-box">
            <select name="stock_listing">
              <option value="非上場" @if(old('stock_listing')=='非上場' ) selected @endif>非上場</option>
              <option value="東証一部／東証二部" @if(old('stock_listing')=='東証一部／東証二部' ) selected @endif>東証一部／東証二部</option>
              <option value="マザーズ／JASDAQ" @if(old('stock_listing')=='マザーズ／JASDAQ' ) selected @endif>マザーズ／JASDAQ</option>
              <option value="名古屋・札幌・福岡" @if(old('stock_listing')=='名古屋・札幌・福岡' ) selected @endif>名古屋・札幌・福岡</option>
            </select>
          </div>
        </li>
        @if($errors->has('stock_listing'))
        <li class="detail__error">{{$errors->first('stock_listing')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__ttl-box"><span class="detail__ttl">感じたこと</span></li>
        <li class="detail__item"><textarea name="memo" id="" cols="30" rows="10">{{old('memo')}}</textarea></li>
        @if($errors->has('memo'))
        <li class="detail__error">{{$errors->first('memo')}}</li>
        @endif
      </ul>
      <ul class="detail__list">
        <li class="detail__item--send">
          <a href="/companyDetail?id={{$basic->comapny_id}}" class="submit-button__add">戻る</a>
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