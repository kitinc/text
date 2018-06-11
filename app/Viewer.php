<?php



namespace App;



use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;//認証用に追加



//class Viewer extends Model

class Viewer extends Authenticatable//User.phpに合わせて変更

{

protected $table = 'Viewer';

protected $fillable = [

'user_name',

'user_password',

・・・

・・・

 ];

protected $hidden = [

'password',

 ];

}
