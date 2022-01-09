<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'subject' => 'required|min:5|max:50',
            'message' => 'required|min:15|max:500'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'имя'
        ];
    }

    public function messages()
    {
        return [
            'subject.required' => 'Поле "Тема сообщения" обязательное.'
        ];
    }

}