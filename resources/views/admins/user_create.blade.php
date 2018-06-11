
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>新建用户</title>
</head>
<body>
<h1>新規ユーザー</h1>
  <table>
      <form method="post" action="/admin_create">
        {{csrf_field()}}
        <tr><td>用户名</td><td><input type="text" name="user_name" value="{{old('user_name')}}"></td></tr>
        <tr><td>密码</td><td><input type="text" name="password" value="{{old('password')}}"></td></tr>
        <tr><td>确认密码</td><td><input type="text" name="password_confirmation" value="{{old('password_confirmation')}}"></td></tr>
        <tr><td>邮箱</td><td><input type="text" name="user_mail" value="{{old('user_mail')}}"></td></tr>
        <tr><td>电话号码</td><td><input type="text" name="user_phone" value="{{old('user_phone')}}"></td></tr>
        <tr><td>性别</td><td><input type="radio" name="user_gender" value="1">男<input type="radio" name="user_gender" value="2">女</td></tr>
        <tr><td>生日</td><td><input type="date" name="user_birth" value="{{old('user_birth')}}"></td></tr>
        <tr><td style="height:100px;"></td><td><input type="submit" value="新規"><td></tr>
        </form>
      </table></td>
</body>
</html>
