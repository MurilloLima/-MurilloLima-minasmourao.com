<?php

namespace App\Http\Requests\Panel\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
            'img' => 'required|mimes:png,jpg,jpeg',
            'title' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'img.required' => 'Escolha uma imagem',
            'img.mimes' => 'Formata de imagem inválido!',
            'title.required' => 'Escolha um título para o slider'
        ];
    }
}
