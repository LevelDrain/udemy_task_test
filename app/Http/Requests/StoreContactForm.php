<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

//バリデーションのルールを書く
//php artisan make:request StoreContactForm

class StoreContactForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;//trueに変える
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //バリデーションのルール
            'your_name' => 'required|string|max:20',
            'title' => 'required|string|max:50',
            'email' => 'required|email|unique:users|max:255',
            'url' => 'url|nullable',
            'gender' => 'required',
            'age' => 'required',
            'contact' => 'required|string|max:200',
            'caution' => 'required|accepted',//チェックしているかどうか
        ];
    }
}
