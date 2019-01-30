<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HelloRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
     public function authorize()
     {
         if ($this->path() == 'hello')
         {
             return true;

         } else {
             return false;
         }

     }
     public function rules()
     {
         return [
             'name' => 'required',
             'mail' => 'email',
             'age' => 'numeric|hello',

         ];

     }
     public function messages()
     {
         return [

           'name.required'=>'名前かいて',
           'mail.email'=>'メアド必要',
           'age.numeric'=>'年齢整数で',
           'age.hello'=>'偶数だけ',
         ];

     }
  }
  
