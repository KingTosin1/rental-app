<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreApplicationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            // PERSONAL INFO
            'full_name' => ['required','string','max:255'],
            'email' => ['required','email','max:255'],
            'phone' => ['required','string','max:50'],
            'address' => ['required','string','max:500'],
            'marital_status' => ['required','string','max:50'],
            'children_count' => ['required','integer','min:0','max:20'],

            // OCCUPANCY
            'occupancy_length' => ['required','string','max:100'],
            'move_in_date' => ['required','date'],
            'pets' => ['required','boolean'],
            'smokers_count' => ['required','integer','min:0','max:20'],
            'ever_evicted' => ['required','boolean'],
            'vacating_reason' => ['required','string','max:1000'],

            // EMPLOYMENT
            'employer_name' => ['required','string','max:255'],
            'occupation' => ['required','string','max:255'],
            'employment_length' => ['required','string','max:100'],
            'monthly_income' => ['required','numeric','min:0','max:100000000'],

            // REFERENCES
            'landlord_name' => ['required','string','max:255'],
            'landlord_phone' => ['required','string','max:50'],
            'next_of_kin' => ['required','string','max:255'],
            'relationship' => ['required','string','max:100'],
            'next_of_kin_phone' => ['required','string','max:50'],

            // DECLARATION
            'authorized_check' => ['required','boolean'],
            'information_verified' => ['sometimes','boolean'],
        ];
    }

    public function messages(): array
    {
        return [
            'authorized_check.required' => 'Authorization is required.',
            'information_verified.boolean' => 'Invalid value for verification flag.',
        ];
    }
}

