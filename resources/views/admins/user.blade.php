<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>
<body>
  <h1>用户账户信息</h1>
<table border="1">
  <tr><td>用户名</td><td>邮箱</td><td>电话号码</td><td>性别</td><td>生日</td><td>预约数</td><td>用户信息编辑</td><td>预约信息</td></tr>
    @foreach($item as $item)
    <tr><td>{{$item->user_name}}</td>
      <td>{{$item->user_mail}}</td>
      <td>{{$item->user_phone}}</td>
      @if($item->user_gender==1)
      <td>男</td>
        @else
        <td>女</td>
        @endif
      <td>{{$item->user_birth}}</td>
      <td>{{count($item->tickets)}}</td>
      <form action="/admin_edit" method="get">
        {{ csrf_field() }}
      <td>
        <input type="hidden" name="id" value={{$item->id}}>
        <input type="submit" value="编辑"></form>
      </td>
      <form action="/user_ticket" method="get">
        {{ csrf_field() }}
      <td>
        <input type="hidden" name="id" value={{$item->id}}>
        <input type="submit" value="详细"></form>
      </td>
    </tr>
    @endforeach
      </table>
</body>
</html>
