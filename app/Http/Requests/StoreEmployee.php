<?php

namespace App\Http\Requests;

use App\Models\Employee;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Validator;

class StoreEmployee extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check() && Auth::user()->can('edit employees');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'middle_initial' => ['nullable', 'string', 'max:1'],
            'email' => ['nullable', 'string'],
            'address' => ['required', 'string'],
            'address2' => ['nullable', 'string'],
            'city' => ['required', 'string'],
            'state' => ['required', 'string', 'max:2'],
            'zip' => ['required', 'string'],
            'classification' => ['required', Rule::in(Employee::getClassifications())],
            'payment_method' => ['required', Rule::in(Employee::getPaymentMethods())],
            'salary' => ['nullable', 'numeric'],
            'hourly_rate' => ['nullable', 'numeric'],
            'commission_rate' => ['nullable', 'numeric'],
            'routing_number' => ['required', 'string'],
            'account_number' => ['required', 'string'],
            'phone' => ['nullable', 'string'],
            'gender' => ['required', 'string', Rule::in(Employee::getGenders())],
            'birth_date' => ['nullable', 'date_format:m/d/Y'],
        ];
    }

    /**
     * @param Validator $validator
     * @return void
     */
    public function withValidator(Validator $validator)
    {
        $validator->after(function($validator) {

            // Check that at least one pay rate is set
            if (
                is_null(request('salary')) &&
                is_null(request('hourly_rate')) &&
                is_null(request('commission_rate'))
            ) {
                $validator->errors()->add('hourly_rate', 'Employee must have at least one ');
            }
        });
    }
}
