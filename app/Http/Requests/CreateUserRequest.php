<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'user_name'=>'required|max:20',
        'password'=>'required|min:8|max:12',
        'user_mail'=>'required|email|max:100',
        'user_phone'=>'required|min:11|max:11',
        'user_gender'=>'required',
        'user_birth'=>'required',
        ];
    }
    public function message(){
      return[
        'user_name'=>'ユーザー名を入力してください。',
        'user_mail.email'  => 'メールアドレスとして正しい形式ではありません。',
      ]
    }

    public function authorize() {
    if(!session()->has('isAdmin')) {
        return false;
    }
    return true;
}
}
