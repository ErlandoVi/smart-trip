<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class GovernmentRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        switch ($this->method()) {
            case 'POST':
            {    
                return [
                    'code'     => ['required'],
                    'agency_name'    => ['required'],
                    'agency_image' => ['required','image'],
                    'agency_address'     => ['required'],
                    'agency_phone' => ['required'],
                    'description' => ['required'],
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'code'    => ['required'],
                    'agency_name' => ['required','unique:governments,agency_name,' . request()->route('government')->id],
                    'agency_image' => ['image'],
                    'agency_address' => ['required'],
                    'agency_phone' => ['required'],
                    'description' => ['required'],
                ];                
            }
            default: break;
        }
    }
}
