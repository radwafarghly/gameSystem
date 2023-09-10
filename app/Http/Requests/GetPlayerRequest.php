<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GetPlayerRequest extends FormRequest
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

            'players'=>'required|integer|min:1|lte:26',
            'turns' =>'required|integer',
            'start_player'=>'required|integer|lte:players',

        ];
    }
}
