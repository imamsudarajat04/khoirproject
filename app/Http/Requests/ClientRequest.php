<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ClientRequest extends FormRequest
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
                'name'            => 'required|string',
                'image'          => 'file|mimes:png,jpg,jpeg',
            ];
        } else {
            $rules = [
                'name'            => 'required|string',
                'image'          => 'required|file|mimes:png,jpg,jpeg',
            ];
        }

        return $rules;
    }
}
