<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'CatName'=>'required|min:10',
            'CatDesc'=>'required|min:10'
        ];
    }
    public function messages(){
        return[
            'CatName.required'=>"teh category name required",
            'CatDesc.required'=>"the category description",
            'CatName.min'=>"the category description should be less than 10 chars",
            'CatDesc.min'=>"the category description should be less than 10 chars"
        ];
    }
}
