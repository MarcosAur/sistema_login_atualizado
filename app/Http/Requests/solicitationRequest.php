<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class solicitationRequest extends FormRequest
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
        return [
            'assunto' => 'required|max:50',
            'descricao' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'assunto.required' => 'A solicitação precisa de um assunto',
            'assunto.max' => 'O assunto deve ter no máximo 50 caracteres',
            'descricao.required' => 'A solicitação precisa de uma descrição'
        ];
    }
}
