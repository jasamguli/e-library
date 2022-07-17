<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreBookRequest extends FormRequest
{
    public function authorize()
    {
        return Auth::check();
    }

    public function rules()
    {
        return [
            'title' => 'required',
            'content' => 'required|min:20',
            'isbn' => 'required|integer',
            'author_id' => 'required',
            'picture' => 'sometimes'
        ];
    }
}
