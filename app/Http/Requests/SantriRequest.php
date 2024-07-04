<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class SantriRequest extends FormRequest
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
            'nama'                    => 'required|string|min:4',
            'alamat'                  => 'required|string|min:5',
            'nisn'                    => 'required|digits:10',
            'nik'                     => 'required|digits:16',
            'tempat_lahir'            => 'required|string',
            'tanggal_lahir'           => 'required|date',
            'no_kk'                   => 'required|digits:16',
            'phone'                   => 'required|digits_between:10,13',
            'nama_ayah'               => 'required|string|min:4',
            'nik_ayah'                => 'required|digits:16',
            'pekerjaan_ayah'          => 'required|string',
            'riwayat_pendidikan_ayah' => 'required|string',
            'nama_ibu'                => 'required|string|min:4',
            'nik_ibu'                 => 'required|digits:16',
            'pekerjaan_ibu'           => 'required|string',
            'riwayat_pendidikan_ibu'  => 'required|string',
            'telfon_orang_tua'        => 'required|digits_between:10,13',
            'tahun_masuk'             => 'required|digits:4',
            'photo'                   => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $this->validator = $validator;
    }
}
