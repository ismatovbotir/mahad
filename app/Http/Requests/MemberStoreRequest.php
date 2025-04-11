<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberStoreRequest extends FormRequest
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
        return [
            "name"=>"required",
            "surename"=>"required",
            "passport"=>"required|unique:members,passport",
            "email"=>"required|unique:members,email",
            "phone"=>"required",
            "bday"=>"required",
            "photo"=>'image|mimes:jpg,jpeg,png|max:1024',
            "role"=>'required|integer',
            "course"=>'required|integer'
            
        ];
    }

    public function messages(){
        return[
            
            "name.required"=>"Talaba ismi bosh bola olmaydi",
            "surenam.required"=>"Talaba familiyasi bosh bola olmaydi",
            "email.required"=>"Talaba email i bosh bola olmaydi",
            "passpord.required"=>"Talaba xujjati malumotlari bosh bola olmaydi",
            "phone.required"=>"Talaba telefon raqami bosh bola olmaydi",
            "role.required"=>"Kutubxona azosi rolini tanlang",
            "course.required"=>"Guruh tanlang",
            "course.integer"=>"Guruh tanlang yoki yangi guruh qoshing",
            "role.integer"=>"Kutubxon uchun rol tanlang"
            

        ];
            
    }
}
