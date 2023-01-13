<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
            'title'=>'required|max:150|min:2',
            'image'=>'required|max:255|min:2',
            'price'=>'required|max:200|min:1',
            'series'=>'required|max:200|min:2',
            'type'=>'required|max:50|min:2',
        ];
    }
    public function messages(){
        return[
            'title.required'=>'Inserisci un titolo',
            'title.max'=>'Il titolo ha un massimo di 255 caratteri',
            'title.min'=>'Il titolo ha un minimo di 2 caratteri',
            'image.required'=>'Inserisci un immagine',
            'image.max'=>'l immagine ha un massimo di 255 caratteri',
            'image.min'=>'l immagine ha un minimo di 2 caratteri',
            'price.required'=>'Inserisci un prezzo',
            'price.max'=>'Il prezzo ha un massimo di 200',
            'price.min'=>'Il prezzo ha un minimo di 1',
            'series.required'=>'Inserisci La serie',
            'series.max'=>'La serie ha un massimo di 200 caratteri',
            'series.min'=>'La serie ha un minimo di 2 caratteri',
            'type.required'=>'Inserisci un tipo',
            'type.max'=>'Il tipo ha un massimo di 50 caratteri',
            'type.min'=>'Il tipo ha un minimo di 2 caratteri',
        ];
    }
}
