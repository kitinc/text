
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>個人ホームページ</title>
</head>
<body>

<table width="1024" border="0">
<tr>
<td colspan="2" style="background-color:#00d3ff;text-align:center;">
<h1>個人ホームページ</h1>
</td></tr>
<tr style="width:1024px;">
<td style="width:200px;">@if($user)<b>User:{{$user->user_name.'('.$user->user_mail.')'}}</b>@endif</td><td style="width:824px;text-align:right;"><a href="/index">ホームページ</a></td>
</tr>

<tr>
<td style="background-color:#00d3ff;width:200px;">
@if($user)
<form method="get" action="/user_history"><input type="hidden" name="user_name" value="{{$user->user_name}}"><input type="submit" value="予約情報"></form><br>
<form action="/password_change" method="get">{{csrf_field() }}<input type="hidden" name="user_name" value="{{$user->user_name}}"><input type="submit" value="パスワード変更"></form><br>
<form action="/loginout" method="get">{{csrf_field() }}<input type="submit" value="ログアウト"></form><br>
</td>
<td style="background-color:#ffffff;height:400px;width:1000px;text-align:center;">


</td>
</tr>

<tr>
<td colspan="2" style="background-color:#00d3ff;text-align:center;">
QRticket</td>
</tr>
</table>
@endif
</body>
</html>
