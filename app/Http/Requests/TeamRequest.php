<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class TeamRequest extends FormRequest
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
                'devision_id'     => 'required|integer',
                'avatar'          => 'file|mimes:png,jpg,jpeg',
                'facebook_link'   => 'nullable|url',
                'twitter_link'    => 'nullable|url',
                'instagram_link'  => 'nullable|url',
                'linkedin_link'   => 'nullable|url',
            ];
        } else {
            $rules = [
                'name'            => 'required|string',
                'devision_id'     => 'required|integer',
                'avatar'          => 'required|file|mimes:png,jpg,jpeg',
                'facebook_link'   => 'nullable|url',
                'twitter_link'    => 'nullable|url',
                'instagram_link'  => 'nullable|url',
                'linkedin_link'   => 'nullable|url',
            ];
        }

        return $rules;
    }
}
