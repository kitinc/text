<html>
<head>
  <meta charset="utf-8">
</head>
<body>
<h1>座位信息</h1>
<form>
<input type="text" value="">
<input type="submit" value="search">
</form>
@if($items !=null)
    <table border="1">
    <tr><td>座位排号</td><td>座位列号</td></tr>
  @foreach($items as $item)
  <tr><td>{{$item->seat_row}}</td>
  <td>{{$item->seat_col}}</td>
  <td><form method="post"><input type="submit" value="编辑"></td></tr></form>
  @endforeach
</table>
<form action="/seat_create"><input type="submit" value="新建"></form>

@endif
@if ($items===null)
<p>对不起，没有数据</p>
@endif<br>
</body>
</html>
