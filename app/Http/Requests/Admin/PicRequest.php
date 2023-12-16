<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PicRequest extends FormRequest
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
                    'pic_name'    => ['required'],
                    'pic_phone' => ['required'],
                    'pic_email' => ['required'],
                    'agency_id' => ['required'],
                    'agency_name' => ['required'],
                    'pic_image' => ['required','image'],
                    'pic_roles' => ['required'],
                    'description' => ['required'],
                    'sequence' => ['required'],
                    'is_active' => ['required'],
                    'is_pic' => ['required'],
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'code' => ['required'],
                    'pic_name'    => ['required','unique:pics,pic_name,' . request()->route('pic')->id],
                    'pic_phone' => ['required'],
                    'pic_email' => ['required'],
                    'agency_id' => ['required'],
                    'agency_name' => ['required'],
                    'pic_image' => ['image'],
                    'pic_roles' => ['required'],
                    'description' => ['required'],
                    'sequence' => ['required'],
                    'is_active' => ['required'],
                    'is_pic' => ['required'],
                ];                
            }
            default: break;
        }
    }
}
