<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name'=> ['required', 'string','max:50'],
            'description'=> ['required', 'string','max:2000'],
            'keyword'=> ['required', 'string','max:2000'],
            'category_id'=> ['required', 'exists:App\Models\ProductCategory,id'],
            'new'=> ['required', 'boolean'],
            'position'=> ['required', 'integer','min:1','max:3'],
            'vedette'=> ['required', 'boolean'],
            'stock_quantity'=> ['required', 'integer','min:1'],
            'price'=> ['required', 'integer','min:1'],
            'nature'=> ['required', 'boolean'],
            'brand_id'=> ['required', 'exists:App\Models\Brand,id'],
            'store_id'=> ['required', 'exists:App\Models\Store,id'],
            'state'=> ['required', 'boolean'],
        ];
    }
}
