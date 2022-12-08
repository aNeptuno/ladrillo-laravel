<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $this->redirect = url()->previous() . '#contacto';
        return [
            'name'  =>'required',
            'email' =>'required|email',
            'msg'   =>'required',
            'subj'  =>'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'     => 'Ingrese su nombre.',
            'email.required'    => 'Ingrese su email.',
            'msg.required'      => 'Escriba un mensaje.',
            'subj.required'     => 'Ingrese el asunto.',
            'email.email'       => 'Email incorrecto.',
        ];

    }

}
