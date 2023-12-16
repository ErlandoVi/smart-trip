<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PackageRequest extends FormRequest
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
                    'package_name'     => ['required'],
                    'quantity'    => ['required'],
                    'price' => ['required'],
                    'package_image' => ['required','image'],
                    'description' => ['required'],
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'package_name'    => ['required','unique:packages,package_name,' . request()->route('package')->id],
                    'quantity' => ['required'],
                    'price' => ['required'],
                    'package_image' => ['image'],
                    'description' => ['required'],
                ];                
            }
            default: break;
        }
    }
}
