<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'title'=> ['required', 'max:50'],
            'description' => ['required', 'max:500'],
            'price'=> ['required', 'min:1'],
            'stock'=> ['required', 'min:0'],
            'status'=> ['required', 'in:available,unavailable'],
            'venue'=> ['required', 'max:50'],
            ];
        
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if ($this->stock == 0 && $this->status == 'available'){
            $validator->errors()->add('stock' , 'If available must have a Booking number');
            }
        });
    }
}
