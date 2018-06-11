<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>
<body>
<table width="1024" border="0">
  <tr>
  <td colspan="2" style="background-color:#00d3ff;text-align:center;">
  <h1>用户账户信息</h1>
  </td></tr>
  <tr style="width:1024px;">
  <td style="width:200px;">@if($user)<b>User:{{$user->user_name.'('.$user->user_mail.')'}}</b>@endif</td><td style="width:824px;text-align:right;"><a href="">ホームページ</a></td>
  </tr>

  <tr>
  <td style="background-color:#00d3ff;width:200px;">
  <form method="get" action="/user_history"><input type="hidden" name="user_name" value="{{$user->user_name}}"><input type="submit" value="予約情報"></form><br>
  <form method="get" action="/password_change"><input type="hidden" name="user_name" value="{{$user->user_name}}"><input type="submit" value="パスワード変更"></form><br>
  <form method="get" action="/user_login"><input type="submit" value="ログアウト"></form><br>
  </td>
  <td style="background-color:#ffffff;height:400px;width:1000px;text-align:center;">
    <table border="1">
    @if($item)
    <tr><td style="width:200px">用户名</td><td style="width:400px">{{$item->user_name}}</td></tr>
    <tr><td>邮箱</td><td>{{$item->user_mail}}</td></tr>
    <tr><td>电话号码</td><td>{{$item->user_phone}}</td></tr>
    <tr><td>性别</td><td>{{$item->user_gender}}</td></tr>
    <tr><td>生日</td><td>{{$item->user_birth}}</td></tr>
    <tr><td>预约数</td><td>{{count($item->tickets)}}</td></tr>
      <tr><td><form action="/edit" method="get">
        {{ csrf_field() }}
        用户信息编辑</td><td>
        <input type="hidden" name="id" value={{$item->id}}>
        <input type="hidden" name="user_name" value="{{$user->user_name}}">
        <input type="submit" value="编辑"></form>
      </td>
    </tr>
  </table>
    @endif</td>
  </tr>

  <tr>
  <td colspan="2" style="background-color:#00d3ff;text-align:center;">
  QRticket</td>
  </tr>
  </table>
</body>
</html>
