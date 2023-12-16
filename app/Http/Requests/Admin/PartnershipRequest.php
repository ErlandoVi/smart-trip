<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PartnershipRequest extends FormRequest
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
                    'partner_name'    => ['required'],
                    'partner_type'    => ['required'],
                    'partner_address' => ['required'],
                    'pic_name' => ['required'],
                    'pic_email' => ['required'],
                    'pic_phone' => ['required'],
                    'latitude' => ['required'],
                    'longitude' => ['required'],
                    'partner_image' => ['required','image'],
                    'description' => ['required'],
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'partner_name'    => ['required','unique:partnerships,partner_name,' . request()->route('partnership')->id],
                    'partner_type' => ['required'],
                    'partner_address' => ['required'],
                    'pic_name' => ['required'],
                    'pic_email' => ['required'],
                    'pic_phone' => ['required'],
                    'latitude' => ['required'],
                    'longitude' => ['required'],
                    'partner_image' => ['image'],
                    'description' => ['required'],
                ];                
            }
            default: break;
        }
    }
}
