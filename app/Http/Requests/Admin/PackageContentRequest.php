<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PackageContentRequest extends FormRequest
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
                    'package_id'     => ['required'],
                    'name'    => ['required'],
                    'price' => ['required'],
                    'package_image' => ['required','image'],
                    'description' => ['required'],
                    'package_type' => ['required'],
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'package_id'    => ['required'],
                    'name' => ['required'],
                    'price' => ['required'],
                    'package_image' => ['image'],
                    'description' => ['required'],
                    'package_type' => ['required'],
                ];                
            }
            default: break;
        }
    }
}
