<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class VendorRequest extends FormRequest
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
        $rules = [];

        $rules['vendor_name']        = 'required|max:145';
        $rules['category_id']        = 'required';
        $rules['sub_category_id']    = 'required';
        $rules['email']              = 'required|email|max:145';
        
        return $rules;
    }

    public function messages() 
    {
        $messages = [];

        $messages['vendor_name.required']        = \Lang::get('admin/general/vendor/create.vendor_name_req_err');
        $messages['vendor_name.max']             = \Lang::get('admin/general/vendor/create.vendor_name_max_err');
        $messages['category_id.required']        = \Lang::get('admin/general/vendor/create.category_id_req_err');
        $messages['sub_category_id.required']    = \Lang::get('admin/general/vendor/create.sub_category_id_req_err');
        $messages['email.required']              = \Lang::get('admin/general/vendor/create.email_req_err');
        $messages['email.max']                  = \Lang::get('admin/general/vendor/create.max_email_req_err');
        $messages['email.email']                = \Lang::get('admin/general/vendor/create.valid_email_req_err');

        return $messages;
    }
}
