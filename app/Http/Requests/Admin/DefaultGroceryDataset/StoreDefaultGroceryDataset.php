<?php

namespace App\Http\Requests\Admin\DefaultGroceryDataset;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreDefaultGroceryDataset extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.default-grocery-dataset.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'product_id' => ['nullable', 'string'],
            'categroy' => ['nullable', 'string'],
            'product_name' => ['nullable', 'string'],
            'weight_packing' => ['nullable', 'string'],
            'description' => ['nullable', 'string'],
            'price' => ['nullable', 'string'],
            'currency' => ['nullable', 'string'],
            'images' => ['nullable', 'string'],
            'meta' => ['nullable', 'string'],
            'status' => ['nullable', 'string'],
            
        ];
    }

    /**
    * Modify input data
    *
    * @return array
    */
    public function getSanitized(): array
    {
        $sanitized = $this->validated();

        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
