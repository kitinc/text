
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>パスワード変更</title>
</head>
<body>

<table width="1024" border="0">
<tr>
<td colspan="2" style="background-color:#00d3ff;text-align:center;">
<h1>パスワード変更</h1>
</td></tr>

<tr style="width:1024px;">
<td style="width:200px;">
  @if(Auth::check())
  <b>User:{{$user->user_name.'('.$user->user_mail.')'}}</b>
  @else
  <b>1<b>
  @endif
</td>
<td style="width:824px;text-align:right;"><a href="">ホームページ</a></td>
</tr>

<tr>
<td style="background-color:#00d3ff;width:200px;">
<form method="get" action="/user"><input type="hidden" name="user_name" value="{{$user->user_name}}"><input type="submit" value="個人情報"></form><br>
<form method="get" action="/user_history"><input type="hidden" name="user_name" value="{{$user->user_name}}"><input type="submit" value="予約情報"></form><br>
<form action="/user_login" method="get">{{csrf_field() }}<input type="submit" value="ログアウト"></form><br>
</td>
<td style="background-color:#ffffff;height:400px;width:1000px;text-align:center;">
  <form method="get" action="/user">
      {{csrf_field() }}
      <table border="1" style="height:300px;width:800px">
      <tr><td>旧いパスワード</td><td><input type="text" name="password" value=""></td></tr>
      <tr><td>新しいパスワード</td><td><input type="text" name="edit_password" value=""></td></tr>
      <tr><td>確認パスワード</td><td><input type="text" name="password_confirmation" value=""></td></tr>
      <tr><td><input type="submit" value="変更"></td><td></form><form method="get" action="/index"><input type="submit" value="取消"></td>
  </table></td>
</tr>

<tr>
<td colspan="2" style="background-color:#00d3ff;text-align:center;">
QRticket</td>
</tr>
</table>
</body>
</html>
