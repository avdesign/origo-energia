<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateCustomer extends FormRequest
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
        $rules['state_id'] = 'required';
        $rules['name'] = 'required|min:3|max:60';
        $rules['email'] = 'required|email|unique:customers';
        $rules['phone'] = 'required';
        $rules['city'] = 'required';
        $rules['birth_date'] = 'required';
    
        if ($this->method() == 'PUT') {
            $uuid = $this->segment(4);
            $rules['email'] = "required|email|unique:users,email,{$uuid},uuid";
        }
    
    }
    
    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    
    public function messages()
    {
        return [
            'state_id.required' => 'O estado é obrigatório.',
            'name.required' => 'O nome é obrigatório.',
            'name.min' => 'O nome deverá conter no mínimo 3 caracteres.',
            'name.max' => 'O nome não deverá conter mais de 60 caracteres.',
            'phone.required' => 'O telefone é obrigatório',
            'city.required' => 'A cidade é obrigatória.',
            'birth_date.required' => 'A data de nascimento é obrigatória',
        ];
    }
}
