<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>用户登录</title>
</head>
<body>

<table width="1024" border="0">
<tr>
<td colspan="2" style="background-color:#00d3ff;text-align:center;">
<h1>用户登录</h1>
</td></tr>
<tr style="width:1024px;">
<td style="width:200px;"><b><h4>{{$message}}</h4></b></td><td style="width:824px;text-align:right;"><a href="/index">ホームページ</a></td>
</tr>

<tr>
<td style="background-color:#ffffff;height:300px;width:1000px;text-align:center;">
  <table>
      <form method="post" action="/user_login">
        {{csrf_field()}}
        <tr><td style="width:2000px;height:100px;">用户名</td><td style="width:400px"><input type="text" name="user_name" value="{{old('user_name')}}"></td></tr>
        <tr><td>密码</td><td><input type="text" name="password" value="{{old('password')}}"></td></tr>
        <tr><td style="height:100px;"><input type="submit" value="登录"></td></form><td><form method="get" action="/user_create"><input type="submit" value="新規"></form></td>

  </table></td>
</tr>

<tr>
<td colspan="2" style="background-color:#00d3ff;text-align:center;">
QRticket</td>
</tr>
</table>

</body>
</html>
