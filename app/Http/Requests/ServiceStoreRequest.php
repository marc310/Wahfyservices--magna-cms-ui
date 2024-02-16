<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceStoreRequest extends FormRequest
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
            // 'service_name' => ['required', 'string', 'max:400'],
            // 'service_image' => ['required','mimes:jpg,jpeg,png,bmp','max:2000'],

        ];
    }

    public function messages()
{
    return [
        // 'service_name.required' => 'A service_name is required',
        // 'service_desc.required' => 'A service_desc is required',
        // 'service_image.required' => 'A service_image is required',
        // 'service_image.mimes' => 'this extension is not an image',
        // 'status.required' => 'A status is required',

    ];
}
}
