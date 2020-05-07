<?php

namespace App\Http\Requests;

use App\Helpers\DateHelper;
use Illuminate\Foundation\Http\FormRequest;

class Task extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:255',
            'date' => sprintf("required|date|date_format:Y-m-d"),
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'A title is required',
            'date.required'  => 'A date is required',
        ];
    }

    public function validate(array $rules = [], $params = [])
    {
        parent::validate($this->rules(), $params);
    }
}
