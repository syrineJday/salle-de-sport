<?php

namespace App\Http\Requests;

use App\Models\Seance;
use Illuminate\Foundation\Http\FormRequest;

class SalleUpdateRequest extends FormRequest
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
        $seance = Seance::find(request()->get('salle_id'));
        $unique = '';
        dump($seance->num);
        dump(request()->put('num'));
        dd($seance->num != request()->get('num'));
        if($seance->num != request()->get('num')){
            $unique = 'unique:salles';
        }
        return [
            "label" => ['required' , 'regex:/^[a-zA-Z ]+$/'],
            "num" => ['required', $unique],
        ];
    }
}
