<?php

namespace App\Http\Requests;


class SearchAvailabilityFormRequest extends FormRequest
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
           // 'check_in'=>'required',
           // 'check_out'=>'required',
           // 'providers'=>'required',
           // 'latitude'=>'required',
           // 'longitude'=>'required',
           // 'location'=>'required',
           // 'radius'=>'required',
           // 'units'=>'required',
           // 'currency'=>'required',
           // 'occupancy'=>'required',
        ];
    }
}
