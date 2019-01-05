<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SubscriberRequest extends FormRequest
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

        $rules['first_name']        = 'required|max:145';
        $rules['last_name']         = 'required|max:145';
        $rules['email']             = 'required|email|max:145';
        
        return $rules;
    }

    public function messages() 
    {
        $messages = [];

        $messages['first_name.required']        = \Lang::get('admin/general/subscriber/create.first_name_req_err');
        $messages['first_name.max']             = \Lang::get('admin/general/subscriber/create.first_name_max_err');
        $messages['last_name.required']         = \Lang::get('admin/general/subscriber/create.last_name_req_err');
        $messages['last_name.max']              = \Lang::get('admin/general/subscriber/create.last_name_max_err');
        $messages['email.required']             = \Lang::get('admin/general/subscriber/create.email_req_err');
        $messages['email.max']                  = \Lang::get('admin/general/subscriber/create.max_email_req_err');
        $messages['email.email']                = \Lang::get('admin/general/subscriber/create.valid_email_req_err');

        return $messages;
    }
}
