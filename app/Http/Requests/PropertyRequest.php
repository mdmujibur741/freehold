<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertyRequest extends FormRequest
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
              'name' => 'required|min:5|unique:properties',
              'price' => 'required',
              'agent_id' => 'required',
              'bed_id' => 'required',
              'shower_id' => 'required',
              'city_id' => 'required',
              'road_id' => 'required',
              'status_id' => 'required',
              'zipCode_id' => 'required',
              'description' => 'required|min:10',
              'imageOne'=> 'required',
              'imageTwo'=> 'required',
        ];
    }
}
