<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
            'first_name' => ['required', 'string', 'max:124'],
            'last_name' => ['required', 'string', 'max:124'],
            'identity_document' => ['required', 'integer', 'min:1000000', 'max:100000000'],
            'profession' => ['required', 'string', 'max:255'],
            'occupation' => ['required', 'string', 'max:255'],
            'areas_of_expertise' => ['required', 'string', 'max:255'],
            'specializations' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:50'],
            'address' => ['required', 'string'],
            'birthdate' => ['required', 'date'],
            'status' => ['required', 'in:active,inactive'],
            // 'image' => ['nullable','image','max:1024'],
        ];
    }
}
