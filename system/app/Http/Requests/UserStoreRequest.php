<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'nama' => 'required',
            'username' => 'required|unique:users,username',
            'email' => 'required|email:rfc,dns',
            'produk' => 'required',
            'foto' => 'required',
            'harga' => 'required',
            'berat' => 'required',
            'stok' => 'required',
            'deskripsi' => 'required'
        ];
    }

    function messages()
    {
        return [
            'nama.required' => 'Field Nama Wajib Diisi',
            'username.required' => 'Field Username Wajib Diisi',
            'username.unique' => 'Username Tersebut Sudah Terdaftar',
            'email.required' => 'Email Wajib Diisi',
            'produk.required' => 'Nama Produk Wajib Diisi',
            'foto.required' => ' Foto Wajib Diisi',
            'harga.required' => 'Harga Wajib Diisi',
            'berat.required' => 'Berat Wajib Diisi',
            'stok.required' => 'Stok Wajib Diisi',
            'deskripsi.required' => 'Deskripsi Wajib Diisi',

        ];
    }
}


