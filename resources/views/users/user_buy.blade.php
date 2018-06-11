
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>チケット購入</title>
<style>
*{margin:0;padding:0;}
a{text-decoration:none;color:#666;}
body{font-family:Verdana,SimSun;font-size:12px;color:#666;text-align:center;background:#EEE;}
li{list-style:none;}
#box{width:760px;margin:100px auto 0 auto;text-align:center;background:#A33236;}
#nav{width:720px;height:30px;margin:0 auto;line-height:30px;}
#nav a{display:block;width:90px;height:30px;text-align:center;color:#FFF;}
#nav li{float:left;}
#nav li ul{display:none;position:absolute;margin-left:-20px;}
#nav li ul li{clear:both;}
#nav li ul a{width:130px;border-top:1px solid #FFF;text-align:center;background:#A33236;-webkit-transition:all 0.5s ease;-moz-transition:all 0.5s ease;transition:all 0.5s ease;}
#nav li ul li a:hover{background:#FFF;color:#A33236;}
</style>
<script>
/*-----显示子菜单-----*/
function display(li) {
	var subNav = li.getElementsByTagName("ul")[0];
	subNav.style.display = "block";
}

/*-----隐藏子菜单-----*/
function hide(li) {
	var subNav = li.getElementsByTagName("ul")[0];
	subNav.style.display = "none";
}
</script>
</head>
<body>

<table width="1024" border="0">
<tr>
<td colspan="2" style="background-color:#00d3ff;text-align:center;">
<h1>チケット購入</h1>
</td></tr>
<tr style="width:1024px;">
<td style="width:200px;">
  @if(Auth::check())
  <b>User:{{$user->user_name.'('.$user->user_mail.')'}}</b>
  @else
  <b>ログインしていません。</b>
  <form method="get" action="/user_login"><input type="submit" value="登録"></form>
  @endif
</td><td style="width:824px;text-align:right;"><a href="">ホームページ</a></td>
</tr>
<tr>
  <form method="get" action="/ticket_create">
    {{csrf_field()}}
  @if($user)
  <tr><td>用户编号</td><td><input type="hidden" name="user_id" value="{{$user->id}}">{{$user->id}}</td></tr>
  @endif
  @if($film)
    <tr><td>映画名</td><td><input type="hidden" name="film_id" value="{{$film->id}}">{{$film->film_name}}</td></tr>
    <tr><td>場次</td><td><input type="hidden" name="film_id" value="{{$film->film_number}}">{{$film->film_number}}</td></tr>
    @endif
    @if($seat)
    <tr><td>座席</td><td><input type="hidden" name="seat_id" value="{{$seat->id}}">{{$seat->seat_row}}{{$seat->seat_col}}</td></tr>
    @endif
    <tr><td>キャンペン</td>
      <td style="width:1000px;">
        <div id="nav">
          <ul>
            <li onmouseover="display(this)" onmouseout="hide(this)">
              <a>選択</a>
      				<ul>@foreach($campaign as $item)
      					<li><a>{{$item->campaign_name}}</a></li>
                @endforeach
      				</ul>
      			</li>
      </ul>
  </div>
    </select></td></tr>
    <input type="hidden" name="status_id" value="1">
      <tr><td><input type="submit" value="購入"></td></tr>
      </form>
<tr>
  <td><a href="user">取消</a></td>
</tr>

<tr>
<td colspan="2" style="background-color:#00d3ff;text-align:center;">
QRticket</td>
</tr>
</table>

</body>
</html>
