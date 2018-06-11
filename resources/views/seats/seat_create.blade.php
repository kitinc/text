<html>
<head>
  <meta charset="utf-8">
</head>
<body>
<h1>增加座位</h1>
<table>
    <form method="post" action="/seat_create">
      {{csrf_field()}}
      <tr><td>座位排号</td><td><input type="text" name="seat_row" value="{{old('seat_row')}}"></td></tr>
      <tr><td>座位列号</td><td><input type="text" name="seat_col" value="{{old('seat_col')}}"></td></tr>
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
