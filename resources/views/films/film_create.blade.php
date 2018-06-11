<html>
<head>
  <meta charset="utf-8">
</head>
<body>
<h1>新建用户</h1>
<table align="center">
    <form method="post" action="/film_create">
      {{csrf_field()}}
      <tr><td>电影名</td><td><input type="text" name="film_name" value="{{old('film_name')}}"></td></tr>
      <tr><td>图片</td><td><input type="text" name="film_picture" value="{{old('film_picture')}}"></td></tr>
      <tr><td>场次</td><td><input type="text" name="film_number" value="{{old('film_number')}}"></td></tr>
      <tr><td>价格</td><td><input type="text" name="film_price" value="{{old('film_number')}}"></td></tr>
      <tr><td>上映时间</td><td><input type="date" name="film_time" value="{{old('film_time')}}"></td></tr>
      <tr><td>时长</td><td><input type="time" name="film_length" value="{{old('film_length')}}"></td></tr>
      <tr><td>介绍</td><td><input type="text" name="film_content" value="{{old('film_content')}}"></td></tr>
      <tr><td><input type="submit" value="新增"><td></tr>
      </form>
    </table>
  <table>
    <tr>
  <td><form action="/user"><input type="submit" value="返回" ></form></td>
  </tr>
</table>
</body>
</html>
