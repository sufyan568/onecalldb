<?php

namespace App\Http\Requests\Admin\SmsLog;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreSmsLog extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.sms-log.create');
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
            'tag' => ['nullable', 'string'],
            'to' => ['nullable', 'string'],
            'message' => ['nullable', 'string'],
            'api_request' => ['nullable', 'string'],
            'api_response' => ['nullable', 'string'],
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
