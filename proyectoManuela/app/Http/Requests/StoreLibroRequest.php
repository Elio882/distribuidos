<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLibroRequest extends FormRequest
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
            'titulo'    => 'required|max:50|min:2',
            'precio'    => 'required|numeric|min:5'
        ];
    }

    public function message(): array 
    {
        return [
            'titulo.required'  => 'campo obligatorio',
            'precio.min'    => 'el precio debe ser mayor a Bs. 5'
        ];
    }

    public function attributes(): array
    {
        return[
            'precio'    => 'price'
        ];
    }
}
