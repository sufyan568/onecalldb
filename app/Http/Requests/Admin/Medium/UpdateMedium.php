<?php

namespace App\Http\Requests\Admin\Medium;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateMedium extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.medium.edit', $this->medium);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'model_type' => ['nullable', 'string'],
            'model_id' => ['nullable', 'string'],
            'uuid' => ['nullable', 'string'],
            'collection_name' => ['nullable', 'string'],
            'name' => ['nullable', 'string'],
            'file_name' => ['nullable', 'string'],
            'mime_type' => ['nullable', 'string'],
            'disk' => ['nullable', 'string'],
            'conversions_disk' => ['nullable', 'string'],
            'size' => ['nullable', 'string'],
            'manipulations' => ['nullable', 'string'],
            'custom_properties' => ['nullable', 'string'],
            'genrated_conversions' => ['nullable', 'string'],
            'responsive_images' => ['nullable', 'string'],
            
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
