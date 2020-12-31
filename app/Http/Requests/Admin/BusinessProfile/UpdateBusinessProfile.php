<?php

namespace App\Http\Requests\Admin\BusinessProfile;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateBusinessProfile extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.business-profile.edit', $this->businessProfile);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'user_id' => ['nullable', 'string'],
            'datetime' => ['nullable', 'string'],
            'name' => ['nullable', 'string'],
            'phone' => ['nullable', 'string'],
            'address' => ['nullable', 'string'],
            'latlng' => ['nullable', 'string'],
            'discription' => ['nullable', 'string'],
            'products_services' => ['nullable', 'string'],
            'keywords' => ['nullable', 'string'],
            'comments' => ['nullable', 'string'],
            'published_id' => ['nullable', 'string'],
            'currency' => ['nullable', 'string'],
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
