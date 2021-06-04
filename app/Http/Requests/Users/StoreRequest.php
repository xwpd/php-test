<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function rules()
    {
        return [
            //
            'id1' => 'required',
            'id2' => 'required'
        ];
    }

    public function authorize()
    {
        return true;
    }
}
