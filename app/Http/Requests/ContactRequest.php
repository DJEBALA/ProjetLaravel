<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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


    /**
       *rules retourne un tableau qui contient des clés qui correspondent
       *aux champs du formulaire et les règles de validation.
       **personnaliser les messages d’erreurs renvoyés avec la fonction rules()**
    **/

    public function rules()
    {
        return [
            'contact_name' => 'bail|required|between:1,20|alpha',
            'contact_email' => 'bail|required|email',
            'contact_message' => 'bail|required|max:250',
            'comment_message' => 'bail|required|max:250'
        ];
    }
}
