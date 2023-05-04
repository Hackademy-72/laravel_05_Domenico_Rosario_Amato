<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            
            'article'=> 'required|max:255',
            'category'=> 'required|max:255',
            'price'=> 'required|numeric',
            'image'=> 'required|image',
        ];
    }

    public function messages(): array
{
    return [
        'article.required' => 'Devi inserire il nome dell\'articolo',
        'article.max' => 'Il nome dell\'articolo deve essere minore di 255 caratteri',
        'category.required' => 'Devi inserire il nome della categoria',
        'category.max' => 'Il nome della categoria deve essere minore di 255 caratteri',
        'price.required'=> 'Devi inserire il prezzo dell\'articolo',
        'price.numeric'=> 'Il prezzo dell\'articolo può contenere solo numeri',
        'image.required'=> 'Devi inserire un\'immagine',
        'image.image'=> 'La foto dell\'articolo deve contenere un\'immagine',

    ];
}
}
