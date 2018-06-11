<html>
<head>
  <meta charset="utf-8">
</head>
<body>
<h1>用户账户信息</h1>
<form action="/user" method="post">
<input type="text" value="">
<input type="submit" value="search">
</form>
<table border="1">

  @foreach($items as $item)
  <tr><td>用户名</td><td>{{$item->user_name}}</td></tr>
  <tr><td>邮箱</td><td>{{$item->user_mail}}</td></tr>
  <tr><td>电话号码</td><td>{{$item->user_phone}}</td></tr>
  <tr><td>性别</td><td>{{$item->user_gender}}</td></tr>
  <tr><td>生日</td><td>{{$item->user_birth}}</td></tr>
  <tr><td>预约数</td><td>{{count($item->tickets)}}</td></tr>
  <tr><td>预约详细</td><td><form action="/user_ticket" method="get">
      {{ csrf_field() }}
      <input type="hidden" name="id" value={{$item->id}}>
    </td></tr>
    <tr><td><form action="/edit" method="get">
      {{ csrf_field() }}
      <input type="hidden" name="id" value={{$item->id}}>
      <input type="submit" value="编辑"></form>
    </td>
  </tr>
  @endforeach
</table>
</body>
</html>
