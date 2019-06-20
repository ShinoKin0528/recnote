<div class="page-top">
  <h1 class="page-top__ttl">企業情報詳細</h1>
  <p class="page-top__company-name">{{$company->company_name}}</p>
</div>
<div class="info-box">
  <div class="info-box__ttls">
    <h2 class="info-box__ttl">総合情報</h2>
  </div>
  <div class="info-box__contents">
    <div class="company__top">
      @if(app('env')=='local')
      <img class="company__status" src="{{ asset('/image/' . $company->status . '.svg') }}">
      @endif
      @if(app('env')=='production')
      <img class="company__status" src="{{ secure_asset('/image/' . $company->status . '.svg') }}">
      @endif
      <div class="company__about">
        <span class="company__hitokoto">{{$company->hitokoto}}</span>
        <h2 class="company__name">{{$company->company_name}}</h2>
      </div>
    </div>
    <table class="company__table">
      <tr class="company__tr">
        <th class="company__th">業種</th>
        <td class="company__td">{{$company->industry}}</td>
      </tr>
      <tr class="company__tr">
        <th class="company__th">職種</th>
        <td class="company__td">{{$company->jobtype}}</td>
      </tr>
      <!--<tr class="company__tr">
        <th class="company__th">本社</th>
        <td class="company__td"></td>
      </tr>-->
    </table>
  </div>
</div>

<a href="/">トップ</a>