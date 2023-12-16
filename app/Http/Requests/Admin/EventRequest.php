<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
                    'event_name'     => ['required'],
                    'event_start_date'    => ['required'],
                    'event_end_date' => ['required'],
                    'key_speaker' => ['required','image'],
                    'description' => ['required'],
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'event_name'    => ['required','unique:events,event_name,' . request()->route('event')->id],
                    'event_start_date' => ['required'],
                    'event_end_date' => ['required'],
                    'key_speaker' => ['image'],
                    'description' => ['required'],
                ];                
            }
            default: break;
        }
    }
}
