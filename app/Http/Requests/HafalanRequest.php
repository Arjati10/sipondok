<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class HafalanRequest extends FormRequest
{
    public $validator = null;

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
            'santri_id'          => 'required|exists:santris,id',
            'surah'              => 'required|string|max:255',
            'ayat'               => 'required|string|max:255',
            'juz'                => 'required|string|max:255',
            'tanggal_hafalan'    => 'required|date',
            'keterangan'         => 'nullable|string',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $this->validator = $validator;
    }
}