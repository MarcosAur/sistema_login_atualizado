<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class projectRequest extends FormRequest
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
            'nome' => 'required|unique:projetos|max:255',
            'hash' => 'required|unique:projetos|max:6',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O projeto precisa de um nome',
            'nome.unique' => 'Já tem um projeto com esse nome',
            'hash.required' => 'O projeto precisa de um hash',
            'hash.max' => 'O hash deve ter no máximo 6 caracteres',
            'hash.unique' => 'Já tem um projeto com esse hash',
        ];
    }
}
