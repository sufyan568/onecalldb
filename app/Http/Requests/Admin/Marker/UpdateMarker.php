<?php

namespace App\Http\Requests\Admin\Marker;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateMarker extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.marker.edit', $this->marker);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'place_id' => ['nullable', 'string'],
            'name' => ['nullable', 'string'],
            'tel_country_code' => ['nullable', 'string'],
            'phone' => ['nullable', 'string'],
            'address' => ['nullable', 'string'],
            'city' => ['nullable', 'string'],
            'region' => ['nullable', 'string'],
            'country' => ['nullable', 'string'],
            'lat' => ['nullable', 'string'],
            'lng' => ['nullable', 'string'],
            'timezone' => ['nullable', 'string'],
            'photo_urls' => ['nullable', 'string'],
            
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
