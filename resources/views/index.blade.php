@if (Auth::check())
<p>mail: {{$user->email}}</p>
<p>userID: {{$user->id}}</p>
<div class="company__box">
  @foreach ($items as $item)
  @if ($item->userid == $user->id)
  <a href="/companyDetail?id={{$item->id - 1}}" style="display: block;">
    <div class="company__top">
      @if(app('env')=='local')
      <img class="company__status" src="{{ asset('/image/' . $item->status . '.svg') }}">
      @endif
      @if(app('env')=='production')
      <img class="company__status" src="{{ secure_asset('/image/' . $item->status . '.svg') }}">
      @endif
      <div class="company__about">
        <span class="company__hitokoto">{{$item->hitokoto}}</span>
        <h2 class="company__name">{{$item->company_name}}</h2>
      </div>
    </div>
    <table class="company__table">
      <tr class="company__tr">
        <th class="company__th">業種</th>
        <td class="company__td">{{$item->industry}}</td>
      </tr>
      <tr class="company__tr">
        <th class="company__th">職種</th>
        <td class="company__td">{{$item->jobtype}}</td>
      </tr>
      <!--<tr class="company__tr">
        <th class="company__th">本社</th>
        <td class="company__td"></td>
      </tr>-->
    </table>
  </a>
  @endif
  @endforeach
</div>
@else
<p>ログインしてください</p>
<a href="/login">ログイン</a>
@endif