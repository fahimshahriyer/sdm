<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreResultRequest extends FormRequest
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
            'student_id' => 'required|exists:students,roll',
            'exam_id' => 'required|exists:exams,id|unique:results',
            'grade_id' => 'required|exists:grades,id',
            'semester_id' => 'required|exists:semesters,id',
            'marks' => 'num|min:1|max:400'
        ];
    }
}
