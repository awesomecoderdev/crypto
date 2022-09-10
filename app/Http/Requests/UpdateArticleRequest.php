<?php

namespace App\Http\Requests;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;

class UpdateArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return !Gate::denies("update");
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "title" => "required|min:5",
            // "slug" => "required|unique:table,column,except,id",
            // "slug" => "required|unique:news,slug",
            "description" => "required|min:10",
            "keywords" => "required",
            "content" => "required"
        ];
    }
}
