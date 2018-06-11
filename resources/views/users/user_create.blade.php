
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>新建用户</title>
</head>
<body>

<table width="1024" border="0">
<tr>
<td colspan="2" style="background-color:#00d3ff;text-align:center;">
<h1>新規ユーザー</h1>
</td></tr>
<tr style="width:1024px;">
<td style="width:200px;"><b>お客さん</b></td><td style="width:824px;text-align:right;"><a href="/index">ホームページ</a></td>
</tr>

<tr>
<td style="background-color:#ffffff;height:400px;width:1000px;text-align:center;">
  <table>
      <form method="post" action="/user_create">
        {{csrf_field()}}
        <tr><td style="width:2000px">用户名</td><td style="width:400px"><input type="text" name="user_name" value="{{old('user_name')}}"></td></tr>
        <tr><td>密码</td><td><input type="text" name="password" value="{{old('password')}}"></td></tr>
        <tr><td>确认密码</td><td><input type="text" name="password_confirmation" value="{{old('password_confirmation')}}"></td></tr>
        <tr><td>邮箱</td><td><input type="text" name="user_mail" value="{{old('user_mail')}}"></td></tr>
        <tr><td>电话号码</td><td><input type="text" name="user_phone" value="{{old('user_phone')}}"></td></tr>
        <tr><td>性别</td><td><input type="radio" name="user_gender" value="1">男<input type="radio" name="user_gender" value="2">女</td></tr>
        <tr><td>生日</td><td><input type="date" name="user_birth" value="{{old('user_birth')}}"></td></tr>
        <tr><td style="height:100px;"></td><td><input type="submit" value="新規"><td></tr>
        </form>
      </table></td>
</tr>

<tr>
<td colspan="2" style="background-color:#00d3ff;text-align:center;">
QRticket</td>
</tr>
</table>

</body>
</html>
