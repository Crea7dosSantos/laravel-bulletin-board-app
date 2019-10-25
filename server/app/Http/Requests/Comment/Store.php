<?php

namespace App\Http\Requests\Comment;

use App\Http\Requests\Request;

class Store extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
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
            'post_id' => ['required', 'exists:posts,id'],
            'body' => ['required', 'max:2000'],
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'post_id.exists' => '作成されたコメントに対する投稿がありません。',
            'body.required' => 'コメントを入力してください。',
            'body.max' => 'コメントの中身は2000文字以内にしてください。',
        ];
    }
}
