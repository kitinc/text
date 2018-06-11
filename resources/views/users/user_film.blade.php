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
<p>ユーザー名</p>
<a href="/user_loginout">ログアウト</a>
<table border="1">
  <tr><td>映画名</td><td>場次</td><td>座席</td><td>キャンペン</td><td>状態</td></tr>
  @foreach($items as $item)
  <tr>
    <td>{{$item->id}}</td>
    <td>{{$item->user_name}}</td>
    <td>{{$item->user_mail}}</td>
    <td>{{$item->user_phone}}</td>
    <td>{{$item->user_gender}}</td>
    <td>{{$item->user_birth}}</td>
    <td>{{count($item->tickets)}}</td>
    <td><form action="/user_ticket" method="get">
      {{ csrf_field() }}
      <input type="hidden" name="id" value={{$item->id}}>
      <input type="submit" value="详细"></form>
    </td>
    <td><form action="/edit" method="get">
      {{ csrf_field() }}
      <input type="hidden" name="id" value={{$item->id}}>
      <input type="submit" value="编辑"></form>
    </td>
  </tr>
  @endforeach
</table>
</body>
</html>
