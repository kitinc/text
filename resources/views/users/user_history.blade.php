
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>予約情報</title>
</head>
<body>

<table width="1024" border="0">
<tr>
<td colspan="2" style="background-color:#00d3ff;text-align:center;">
<h1>予約情報</h1>
</td></tr>
<tr style="width:1024px;">
<td style="width:200px;">
@if(Auth::check())
<b>User:{{$user->user_name.'('.$user->user_mail.')'}}</b>
@endif</td>
<td style="width:824px;text-align:right;"><a href="">ホームページ</a></td>
</tr>

<tr>
<td style="background-color:#00d3ff;width:200px;">
<form action="/user" method="get">{{csrf_field() }}<input type="submit" value="個人情報"></form><br>
<form action="/password_change" method="get">{{csrf_field() }}<input type="submit" value="パスワード変更"></form><br>
<form action="/loginout" method="get">{{csrf_field() }}<input type="submit" value="ログアウト"></form><br>
</td>
<td style="background-color:#ffffff;height:400px;width:1000px;text-align:center;">
      <table border="1" style="height:300px;width:800px">
        <tr style="height:50px;width:1000px"><td>映画名</td><td>場次</td><td>座席</td><td>キャンペン</td><td>状態</td></tr>
      @foreach($history as $history)
      <tr><td>{{$history->film->film_name}}</td>
      <td>{{$history->film->film_number}}</td>
      <td>{{$history->seat->seat_row}}{{$history->seat->seat_col}}</td>
      <td>{{$history->campaign->campaign_name}}</td>
      <td>{{$history->status->status_name}}</td></tr>
      @endforeach
  </table></td>
</tr>

<tr>
<td colspan="2" style="background-color:#00d3ff;text-align:center;">
QRticket</td>
</tr>
</table>

</body>
</html>
