<?php

namespace App\Http\Requests\Business;

use Illuminate\Foundation\Http\FormRequest;

class StoreBusinessRequest extends FormRequest
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
            'code' => 'required|string|min:1|max:20|unique:businesses,code',
			'name' => 'required|string|min:1|max:100',
            'partner_id' => 'required|string',
			'brand' => 'required|string|min:1|max:100',
			'logo' => 'required|image|max:1024',
			'manufacture' => 'required|string|min:1|max:255',
        ];
    }
}
