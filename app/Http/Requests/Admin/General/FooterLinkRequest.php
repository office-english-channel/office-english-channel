<?php

namespace App\HTTP\Request\Admin\General;

use Illuminate\Foundation\Http\FormRequest;

class FooterLinkRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [];

        $rules['title']                 = 'required|max:145';
        $rules['meta_title']            = 'required';
        $rules['post_category_id']      = 'required';
        $rules['column_number']         = 'required';


        return $rules;;
    }
    public function messages()
    {
        $messages = [];

        $messages['title.required']             = \Lang::get('admin/general/footerlinks/create.title_req_err');
        $messages['title.max']                  = \Lang::get('admin/general/footerlinks/create.title_max_err');
        $messages['meta_title.required']        = \Lang::get('admin/general/footerlinks/create.meta_title_req_err');
        $messages['post_category_id.required']  = \Lang::get('admin/general/footerlinks/create.post_category_id_req_err');
        $messages['column_number.required']     = \Lang::get('admin/general/footelinks/create.column_number_req_err');

        return $messages;
    }
}
