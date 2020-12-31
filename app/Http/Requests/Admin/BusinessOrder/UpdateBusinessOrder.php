<?php

namespace App\Http\Requests\Admin\BusinessOrder;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateBusinessOrder extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.business-order.edit', $this->businessOrder);
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
            'buisness_id' => ['nullable', 'string'],
            'buisness_account_id' => ['nullable', 'string'],
            'from_username' => ['nullable', 'string'],
            'category' => ['nullable', 'string'],
            'query_id' => ['nullable', 'string'],
            'delivery_id' => ['nullable', 'string'],
            'comments' => ['nullable', 'string'],
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
