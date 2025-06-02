<?php


namespace Modules\Demand\src\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDemandRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'amount' => 'required',
            'description' => 'sting|nullable',
            'installments'  => 'required|integer|between:1,12',
            'status'       => 'required',   /*needs rule*/


        ];
    }
}
