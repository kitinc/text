<html>
<head>
  <meta charset="utf-8">
</head>
<body>
<h1>确认删除</h1>
<table border="1">

  @if($items)
  <tr><td>用户名</td><td>{{$items->user_name}}</td></tr>
  <tr><td>邮箱</td><td>{{$items->user_mail}}</td></tr>
  <tr><td>电话号码</td><td>{{$items->user_phone}}</td></tr>
  <tr><td>性别</td><td>{{$items->user_gender}}</td></tr>
  <tr><td>生日</td><td>{{$items->user_birth}}</td></tr>
  <tr><td><form action="/delete" method="post">
      {{ csrf_field() }}
  <input type="hidden" name="id" value={{$items->id}}>
  <input type="submit" value="删除"></form>
  </td>
  </tr>
  @endif
</table>
</body>
</html>
