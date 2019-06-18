@if (count($errors) > 0)
<div>
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
</div>
@endif

<table>
  <form action="addtest" method="post">
    @csrf
    <tr>
      <th>company_name: </th>
      <td><input type="text" name="company_name" value="{{old('company_name')}}"></td>
    </tr>
    <tr>
      <th>hitokoto: </th>
      <td><input type="text" name="hitokoto" value="{{old('hitokoto')}}"></td>
    </tr>
    <tr>
      <th>industry: </th>
      <td><input type="text" name="industry" value="{{old('indestry')}}"></td>
    </tr>

    <tr>
      <th>jobtype: </th>
      <td><input type="text" name="jobtype" value="{{old('jobtype')}}"></td>
    </tr>
    <tr>
      <th>status: </th>
      <td><input type="text" name="status" value="{{old('status')}}"></td>
    </tr>
    <tr>
      <th>userid: </th>
      <td><input type="text" name="userid" value="{{old('userid')}}"></td>
    </tr>
    <tr>
      <th></th>
      <td><input type="submit" value="send"></td>
    </tr>
  </form>
</table>