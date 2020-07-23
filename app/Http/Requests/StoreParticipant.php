<?php

namespace App\Http\Requests;

use Illuminate\Support\Str;
use App\Models\Participant;
use Illuminate\Foundation\Http\FormRequest;

class StoreParticipant extends FormRequest
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
            'code' => 'required|min:6|max:6',
            'age' => 'required|numeric|min:5|max:100',
            'gender' => 'required|min:1|max:1',
            'name' => 'required|min:3|max:255',
            'email' => 'required|min:5|max:255|email:rfc',
            'address' => 'required|min:5|max:255',
            'phone' => 'required|min:5|max:15'
        ];
    }

    protected function prepareForValidation()
    {
        // Generate Random Code
        $code = Str::random(6);
        while (Participant::where('code', $code)->get()->isNotEmpty()) {
            $code = Str::random(6);
        }

        $this->merge([
            'code' => $code
        ]);
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
