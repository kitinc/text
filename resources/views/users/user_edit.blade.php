
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>用户情報変更</title>
</head>
<body>

<table width="1024" border="0">
<tr>
<td colspan="2" style="background-color:#00d3ff;text-align:center;">
<h1>用户情報変更</h1>
</td></tr>
<tr style="width:1024px;">
<td style="width:200px;">
@if(Auth::check())
<b>User:{{$user->user_name.'('.$user->user_mail.')'}}</b>
@else
<b>1<b>
@endif</td>
<td style="width:824px;text-align:right;"><a href="">ホームページ</a></td>
</tr>

<tr>
<td style="background-color:#00d3ff;width:200px;">
<form method="get" action="/user"><input type="submit" value="個人情報"></form><br>
<form method="get" action="/user_history"><input type="submit" value="予約情報"></form><br>
<form action="/loginout" method="get">{{csrf_field() }}<input type="submit" value="ログアウト"></form><br>
</td>
<td style="background-color:#ffffff;height:400px;width:1000px;text-align:center;">
  <table border="1">
    <form method="post" action="/success">
          {{ csrf_field() }}
      <tr><td style="width:200px">用户名</td><td style="width:400px"><input type="text" name="user_name" value="{{$items->user_name}}"></td></tr>
      <input type="hidden" name="password" value="{{$items->password}}">
      <tr><td>邮箱</td><td><input type="text" name="user_mail" value="{{$items->user_mail}}"></td></tr>
      <tr><td>电话号码</td><td><input type="text" name="user_phone" value="{{$items->user_phone}}"></td></tr>
      @if($items->user_gender==1)
      <tr><td>性别</td><td><input type="radio" name="user_gender" checked value="1">男<input type="radio" name="user_gender" value="2">女</td></tr>
      @else
      <tr><td>性别</td><td><input type="radio" name="user_gender" checked value="1">男<input type="radio" name="user_gender" checked value="2">女</td></tr>
      @endif
      <tr><td>生日</td><td><input type="text" name="user_birth" value="{{$items->user_birth}}"></td></tr>
      <tr><td colspan="2"><input type="hidden" name="id" value="{{$items->id}}"><input type="submit" value="保存"></td></tr>
        </form>
      </table>
      <table>
    <tr>
  <td><form action="/user"><input type="submit" value="返回" ></form></td>
  </tr>
  </table>
</td>
</tr>

<tr>
<td colspan="2" style="background-color:#00d3ff;text-align:center;">
QRticket</td>
</tr>
</table>

</body>
</html>
