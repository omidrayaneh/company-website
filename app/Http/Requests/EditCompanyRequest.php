<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditCompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email'=>'required|unique:companies,id,' . $this->email,
            'companyName'=>'required',
            'phone'=>'required',
            'supportPhone'=>'required',
            'supportPhoneName'=>'required',
            'address'=>'required',
            'map'=>'required',
        ];
    }
}
