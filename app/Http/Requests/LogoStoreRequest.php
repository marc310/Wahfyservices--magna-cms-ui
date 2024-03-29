<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LogoStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'logo_image' => ['required','mimes:jpg,jpeg,png,bmp','max:2000'],
        ];
    }
}
