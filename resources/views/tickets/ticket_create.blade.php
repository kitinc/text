<html>
<head>
  <meta charset="utf-8">
</head>
<body>
  <form method="post" action="">
    {{csrf_field()}}
    <table>
      <tr><td>电影名</td><td><input type="text" value=></td></tr>
      <tr><td>场次</td><td><input type="text" value=></td></tr>
      <tr><td>座位号</td><td><input type="text" value=></td></tr>
      <tr><td>用户名</td><td><input type="text" value=></td></tr>
      <tr><td>邮箱</td><td><input type="text" value=></td></tr>
      <tr><td>电话号码</td><td><input type="text" value=></td></tr>
      <tr><td>预约状态</td><td><input type="text" value=></td></tr>
      <tr><td>支付状态</td><td><input type="text" value=></td></tr>
      <tr><td>预约日期</td><td><input type="text" value=></td></tr>
      <tr><td><input type="submit" value="新增"><td></tr>
  </table>
  </form>
  <table>
    <tr>
  <td><form action="/ticket"><input type="submit" value="返回" ></form></td>
  </tr>
</table>
</body>
</html>
