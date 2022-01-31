<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MyRequest extends FormRequest
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
            'title'=>"required|max:50|min:2",
                      'price'=>"required|min:2"];
                 
                   
       
        
    }
    public function messages()
    {
        return     [ 'title.required'=>'il titolo è un campo obbligatorio',
                        'title.max'=>'il numero di caratteri consentito è di :max caratteri',
                        'title.min'=>'il numero minimo di caratteri è di :min caratteri',
                        'price.required'=>'il prezzo è un campo obbligatorio',
                        'price.min'=>'il numero minimo di caratteri è di :min caratteri'];
                        
    }

}
