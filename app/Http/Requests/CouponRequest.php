<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CouponRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'code' => ['required', 'string'],
            'startDate' => ['required', 'date','after_or_equal:today'],
            'endDate' => ['required', 'date','after_or_equal:startDate'],
            'discount' => ['required', 'integer','min:1','max:100'],
            'state' => ['required', 'boolean'],
            'store' =>['required','exists:App\Models\Store,id','integer'],
        ];
    }
}
