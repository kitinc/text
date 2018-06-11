
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>用户情報変更</title>
</head>
<body>
<h1>用户情報変更</h1>
  <table border="1">
    <form method="get" action="/success">
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
  <td><form action="/delete" method="get">
    {{ csrf_field() }}
    <input type="hidden" name="id" value={{$items->id}}>
    <input type="submit" value="删除"></form></td>
  </tr>
  </table>
<a href="{{url('admin')}}">返回</a>
</body>
</html>
