<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegistPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() : bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() : array
    {
        return [
            // usersテーブルの同名カラム（name）と重複しないかチェック
            'name' => 'required|unique:users',
            'category' => 'custom_category',// カスタムバリデーションルール
            // バリデーションエラーになった時、以降のバリデーションを実施しない(下のpasswordまで処理が走らない)
            'email' => ['max:10'],
            'password' => 'confirmed',
        ];
    }

    public function withValidator($validator)
    {
        $validator->sometimes('email', 'max:3', function ($inputs) {
            return $inputs->name === 'hoge';
        });
    }

    public function messages()
    {
        return [
            'category.custom_category' =>'赤しか選べません!',
            'email.max' =>'名前がhogeのとき、emailは3文字まで登録できます',
        ];
    }

}
