<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTaskRequest extends FormRequest
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
     * return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title'=> 'required|max:255',
            'description'=> 'required',
            'assigned_to'=> 'required',
            'due_date'=>'required',
            'date_assigned'=> 'required',
            'progress'=> 'required',
            'is_done'=> 'required',
            'comments'=> 'required',
        ];
    }
}
