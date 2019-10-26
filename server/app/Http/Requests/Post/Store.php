<?php

namespace App\Http\Requests\Post;

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
            'title' => ['required', 'max:50'],
            'body' => ['required', 'max:2000'],
            'image' => ['file', 'image', 'mimes:jpeg,png,gif', 'max:2048'],
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
            'title.required' => 'タイトルは必須です。',
            'title.max' => 'タイトルは50文字以内にしてください。',
            'body.required' => '投稿の中身は必須です。',
            'body.max' => '投稿の中身は2000文字以内にしてください。',
            'image.file' => 'ファイルをアップロードしてください',
            'image.image' => '画像ファイルを指定してください',
            'image:mimes' => '画像はjpeg, png, gifのいずれかを指定してください',
            'image:max' => '2048px以下の画像を指定してください',
        ];
    }
}
