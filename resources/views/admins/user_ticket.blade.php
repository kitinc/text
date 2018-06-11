<html>
<head>
  <meta charset="utf-8">
</head>
<body>
<h1>用户预约信息</h1>
<form>
<input type="text" value="">
<input type="submit" value="search">
</form>

    <table border="1">
    <tr><td>编号</td><td>电影名</td><td>电影场次</td><td>座位列号</td><td>座位排号</td><td>票状态</td></tr>
  @foreach($items as $item)
  <form action="/" method="get">
    {{ csrf_field() }}
<tr><td>{{$item->id}}</td>
  <td>{{$item->film->film_name}}</td>
  <td>{{$item->film->film_number}}</td>
  <td>{{$item->seat->seat_row}}</td>
  <td>{{$item->seat->seat_col}}</td>
  <td>{{$item->status->status_name}}</td>
  <td><input type="hidden" name="id" value="{{$item->id}}">
    <input type="submit" value="编辑">
  </td></tr></form>
  @endforeach
</tr>
</table>
<a href="{{url('admin')}}">返回</a>
</body>
</html>
