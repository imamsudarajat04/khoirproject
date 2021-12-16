<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class AboutRequest extends FormRequest
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
                'title'                 => 'required|string',
                'subtitle'              => 'required|string',
                'link_youtube'          => 'required|url',
                'title_point_one'       => 'required|string',
                'subtitle_point_one'    => 'required|string',
                'icon_point_one'        => 'required|string',
                'title_point_two'       => 'required|string',
                'subtitle_point_two'    => 'required|string',
                'icon_point_two'        => 'required|string',
                'title_point_three'     => 'required|string',
                'subtitle_point_three'  => 'required|string',
                'icon_point_three'      => 'required|string',
            ];
        } else {
            $rules = [
                'title'                 => 'nullable|string',
                'subtitle'              => 'nullable|string',
                'link_youtube'          => 'nullable|url',
                'title_point_one'       => 'nullable|string',
                'subtitle_point_one'    => 'nullable|string',
                'icon_point_one'        => 'nullable|string',
                'title_point_two'       => 'nullable|string',
                'subtitle_point_two'    => 'nullable|string',
                'icon_point_two'        => 'nullable|string',
                'title_point_three'     => 'nullable|string',
                'subtitle_point_three'  => 'nullable|string',
                'icon_point_three'      => 'nullable|string',
            ];
        }

        return $rules;
    }
}
