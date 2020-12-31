<?php

namespace App\Http\Requests\Admin\BroadcastMessage;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreBroadcastMessage extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.broadcast-message.create');
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
            'mobile_number' => ['nullable', 'string'],
            'message' => ['nullable', 'string'],
            'channel' => ['nullable', 'string'],
            'type' => ['nullable', 'string'],
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
