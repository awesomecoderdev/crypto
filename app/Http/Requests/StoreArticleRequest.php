<?php

namespace App\Http\Requests;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return !Gate::denies("create");
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "title" => [
                "required"
            ],
            "slug" => [
                "required",
                "alpha_dash",
                "unique:articles"
            ],
            "description" => "required|min:10",
            "keywords" => "required",
            "content" => "required"
        ];
    }
}
