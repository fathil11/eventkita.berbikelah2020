<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateParticipant extends FormRequest
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
            'age' => 'required|numeric|min:5|max:100',
            'gender' => 'required|min:1|max:1',
            'name' => 'required|min:3|max:255',
            'email' => 'required|min:5|max:255|email:rfc',
            'address' => 'required|min:5|max:255',
            'phone' => 'required|min:5|max:15'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'nama',
            'email' => 'email',
            'address' => 'alamat',
            'phone' => 'nomor hp',
        ];
    }
}
