<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class MaterialRequest extends Request
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
            'm_code'=>'regex:/^[a-zA-Z0-9\s\-]*$/',
            'm_description'=>'regex:/^[a-zA-Z0-9\s\-]*$/',
            'm_unit'=>'regex:/^[a-zA-Z]*$/',
            'm_consumption'=>'regex:/^[0-9]*$/',
            'm_last_unit_price'=>'regex:/^[0-9]*$/',
            'm_last_unit_price_currency'=>'regex:/^[a-zA-Z]*$/',
            'm_max'=>'regex:/^[0-9]*$/',
            'm_min'=>'regex:/^[0-9]*$/',
            'm_remarks'=>'regex:/^[a-zA-Z0-9\s\-]*$/',
            'm_required'=>'regex:/^[0-9]*$/',
            'm_stock'=>'regex:/^[0-9]*$/',
            'm_usage'=>'regex:/^[0-9]*$/',
            'm_requesting_dept'=>'regex:/^[a-zA-Z]*$/',
            'm_identity'=>'regex:/^[a-zA-Z0-9\s\-]*$/',
            'm_company'=>'regex:/^[a-zA-Z0-9\s\-]*$/',
            'm_location'=>'regex:/^[a-zA-Z0-9\s\-]*$/',
            'm_reorder'=>'regex:/^[0-9]*$/',
            'm_last_update_date'=>'regex:/^[a-zA-Z0-9\s\-\:]*$/',
            'm_mesc'=>'regex:/^[A-Z0-9\s\-\:]*$/',
        ];
    }
}
