<?php

namespace App\Http\Requests\Admin\GeoVar;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreGeoVar extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.geo-var.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'datetime' => ['nullable', 'string'],
            'comments' => ['nullable', 'string'],
            'name' => ['nullable', 'string'],
            'description' => ['nullable', 'string'],
            'lat1' => ['nullable', 'string'],
            'lng1' => ['nullable', 'string'],
            'lat2' => ['nullable', 'string'],
            'lng2' => ['nullable', 'string'],
            'tpl_var' => ['nullable', 'string'],
            'tpl_val' => ['nullable', 'string'],
            
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
