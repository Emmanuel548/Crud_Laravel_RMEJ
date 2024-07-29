<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarros extends FormRequest
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
            //
            'nombre'=> 'required|min:3|max:10',
        ];
    }
    public function attributes(){
        return [
            'nombre'=> 'car name',
        ];
    }
    public function messages(){
        return [
            'nombre.required' => 'El nombre del carro no puede estar vacio',
        ];
    }
}
