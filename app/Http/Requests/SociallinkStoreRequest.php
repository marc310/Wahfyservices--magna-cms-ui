<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SociallinkStoreRequest extends FormRequest
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
            'home' => ['required', 'string', 'max:200'],
            'manahageya' => ['required', 'string', 'max:200'],
            'clients' => ['required', 'string', 'max:200'],
            'contactus' => ['required', 'string', 'max:200'],

        ];
    }
}
