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
            'isbn' => 'required|regex:/[0-9]+/|digits:13',
            'page_count' => 'required|integer',
            'publish_date' => 'required|date',
            'author_id' => 'required|exists:authors,id',
            'binding_id' => 'required|exists:bindings,id',
            'category_id' => 'required|exists:categories,id',
            'genre_id' => 'required|exists:genres,id',
            'publisher_id' => 'required|exists:publishers,id',
            'script_id' => 'required|exists:scripts,id',
            'size_id' => 'required|exists:sizes,id',
            'total_count' => 'required|integer',
            'picture' => 'sometimes'
        ];
    }
}
