<html>
<head>
  <meta charset="utf-8">
</head>
<body>
<h1>电影信息</h1>
<form>
<input type="text" value="">
<input type="submit" value="search">
</form>
@if($items !=null)
    <table border="1">
    <tr><td>编号</td><td>电影名</td><td>电影图片</td><td>放映时间</td><td>价格</td><td>上映时间段</td><td>电影长度</td><td>电影介绍</td></tr>
  @foreach($items as $item)
  <tr><td>{{$item->id}}<input type="hidden" name="id" value="{{$item->id}}"></td>
  <td>{{$item->film_name}}</td>
  <td>{{$item->film_picture}}</td>
  <td>{{$item->film_number}}</td>
  <td>{{$item->film_price}}</td>
  <td>{{$item->film_time}}</td>
  <td>{{$item->film_stamp}}</td>
  <td><form method="post" action="{{url($item->id)}}"><input type="submit" value="编辑"></td></tr>
  @endforeach
</form>
</table>
<form action="/user_create"><input type="submit" value="新建"></form>

@endif
@if ($items===null)
<p>对不起，没有数据</p>
@endif<br>
</body>
</html>
