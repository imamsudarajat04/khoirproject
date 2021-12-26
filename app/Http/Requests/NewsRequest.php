<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class NewsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $rules = [
                'user_id'             => 'integer|exists:users,id',
                'title'               => 'required|string',
                'description'         => 'nullable',
                'content'             => 'nullable',
                'publish_date'        => 'required|date',
                'cover'               => 'file|mimes:png,jpg,jpeg,svg,ico',
                'category_id'         => 'integer|exists:categories,id',
            ];
        } else {
            $rules = [
                'user_id'             => 'required|integer|exists:users,id',
                'title'               => 'required|string',
                'description'         => 'nullable',
                'content'             => 'nullable',
                'publish_date'        => 'required|date',
                'cover'               => 'required|file|mimes:png,jpg,jpeg,svg,ico',
                'category_id'         => 'required|integer|exists:categories,id',
            ];
        }

        return $rules;
    }
}
