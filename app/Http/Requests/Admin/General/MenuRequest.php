<?php

namespace App\Http\Requests\Admin\General;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
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
    public function rules(Request $request)
    {
        $rules = [];

        $data = $request->all();

        $rules['name']                  = 'required|max:145';
        $rules['slug']                  = 'required';

        if($data['menu_type'] == 4){
            $rules['category_id']       = 'required';
        } elseif ($data['menu_type'] == 2) {
            $rules['page_id']               = 'required';
        } elseif ($data['menu_type'] == 1) {
            // $rules['parent_menu_id']        = 'required';
        }



       
        // $rules['post_category_id']      = 'required';
        
        // $rules['parent_menu_id']        = 'required';


        return $rules;;
    }
    public function messages()
    {
        $messages = [];

        $messages['name.required']             = \Lang::get('admin/general/menus/create.name_req_err');
        $messages['name.max']                  = \Lang::get('admin/general/menus/create.name_max_err');
        $messages['slug.required']             = \Lang::get('admin/general/menus/create.slug_req_err');
        
        $messages['category_id.required']       = \Lang::get('admin/general/menus/create.category_id_req_err');
        $messages['page_id.required']           = \Lang::get('admin/general/menus/create.page_id_req_err');
        $messages['parent_menu_id.required']    = \Lang::get('admin/general/menus/create.parent_menu_id_req_err');

        return $messages;
    }
}
