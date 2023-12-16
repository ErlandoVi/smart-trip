<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ScheduleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
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
                    'event_id'     => ['required'],
                    'event_name'    => ['required'],
                    'event_start_date' => ['required'],
                    'event_end_date' => ['required'],
                    'description' => ['required'],
                    'key_speaker' => ['required'],
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'event_id' => ['required'],
                    'event_name'    => ['required','unique:schedules,event_name,' . request()->route('schedule')->id],
                    'event_start_date' => ['required'],
                    'event_end_date' => ['required'],
                    'description' => ['required'],
                    'key_speaker' => ['required'],
                ];                
            }
            default: break;
        }
    }
}
