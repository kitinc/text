<html>
<head>
  <meta charset="utf-8">
</head>
<body>
<h1>订票编辑</h1>
<table border="1">
  <form method="get" action="">
    {{ csrf_field() }}
    @foreach($item as $item)
    @if($item->id==$items->id)
    <tr><td>ユーザー名</td><td>{{$item->user->user_name}}</td></tr>
    <tr><td>映画名</td><td>{{$item->film->film_name}}</td></tr>
    <tr><td>座席</td><td>{{$item->seat->seat_col}}{{$item->seat->seat_row}}</td></tr>
    <tr><td>キャンペン</td><td>{{$item->campaign->campaign_name}}</td></tr>
    <tr><td>作成時間</td><td>{{$item->created_at}}</td></tr>
    <tr><td>チケット状況</td><td>@foreach($status as $item)
      @if($item->id<'5')
    <input type="radio" name="1" id="{{$item->status_name}}" value="{{$item->status_name}}">{{$item->status_name}}
  @endif
    @endforeach
  </td></tr>
    @endif
    @endforeach
  </form>
  </table>
  <table>
    <tr><td>
  <form action="/ticket_create"><input type="submit" value="提交"></form></td>
  <td><form action="/ticket" method="get"><input type="submit" value="返回"></form></td>
</tr>
</table>
</body>
</html>
