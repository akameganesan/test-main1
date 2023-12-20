<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //return false;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
             'name' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required'],
        ];
    }
    public function messages()
  {
    return [
      'name.required' => '名前を入力してください',
      'email.required' => 'すでに使用されています',
      'email.required' => 'メールアドレスを入力してください',
      'password.required' => 'パスワードを入力してください',
      'password.required' => '確認用パスワードが違っています',
    ];
  }
}
