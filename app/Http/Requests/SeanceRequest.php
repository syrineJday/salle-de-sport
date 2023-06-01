<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeanceRequest extends FormRequest
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
            "day" => ['required'],
            "startTime" => ['required'],
            "endTime" => ['required'],
            "user_id" => ['required'],
            "salle_id" => ['required'],
            "activity_id" => ['required'],
        ];
    }
}
