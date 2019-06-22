@if (Auth::check())
<div class="company__box">
  @foreach ($companies as $company)
  @if ($company->userid == $user->id)
  <a href="/companyDetail?id={{$company->id}}" style="display: block;">
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
      <tr class="company__tr">
        <th class="company__th">本社</th>
        <td class="company__td">{{$company->headoffice_place}}</td>
      </tr>
    </table>
  </a>
  @endif
  @endforeach
</div>

<div class="add-company">
  <a class="add-company__button" href="/companyAdd" style="display:inline-block">
    @if(app('env')=='local')
    <img class="company__status" src="{{ asset('/image/add_company.svg') }}">
    @endif
    @if(app('env')=='production')
    <img class="company__status" src="{{ secure_asset('/image/add_company.svg') }}">
    @endif
  </a>
</div>
@else
<p>ログインしてください</p>
<a href="/login">ログイン</a>
@endif