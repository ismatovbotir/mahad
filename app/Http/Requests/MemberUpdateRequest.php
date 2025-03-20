<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        //dd($this->member);
        return [
            "name"=>"required",
            "surename"=>"required",
            "passport"=>"required|unique:members,passport,".str($this->member),
            "email"=>"required|unique:members,email,".$this->member,
            "phone"=>"required",
            "bday"=>"required",
            "role"=>'integer'
            
        ];
    }

    public function messages(){
        return[
            
            "name.required"=>"Talaba ismi bosh bola olmaydi",
            "surenam.required"=>"Talaba familiyasi bosh bola olmaydi",
            "email.required"=>"Talaba email i bosh bola olmaydi",
            "passpord.required"=>"Talaba xujjati malumotlari bosh bola olmaydi",
            "phone.required"=>"Talaba telefon raqami bosh bola olmaydi"

        ];
            
    }
}
