<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name'=>['required','unique:App\Models\Store,name','string'],
            'email'=>['required','email'],
            'phone'=>['required','string'],
            'description'=>['required','string','min:1','max:2000'],
            'country_id'=>['required','exists:countries,id'],
            'town'=>['required','string'],
            'street'=>['required','string'],
            'logo'=>['required','file','mimes:jpg,png,jpeg'],
        ];
    }
}
