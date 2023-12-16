<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
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
                    'booking_code'    => ['required'],
                    'price_before_tax' => ['required'],
                    'tax' => ['required'],
                    'total_price' => ['required'],
                    'email'    => ['required','email','unique:bookings'],
                    'phone' => ['required'],
                    'latest_order_status' => ['required'],
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'package_id'    => ['required','unique:bookings,package_id,' . request()->route('booking')->id],
                    'booking_code' => ['required'],
                    'price_before_tax' => ['required'],
                    'tax' => ['required'],
                    'total_price' => ['required'],
                    'email'    => ['required','unique:bookings,email,' . request()->route('booking')->id],
                    'phone' => ['required'],
                    'latest_order_status' => ['required'],
                ];                
            }
            default: break;
        }
    }
}
