<?php
 
namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\Facades\DataTables;
use App\Helpers\General;

use Sentinel;
use App\Http\DB\SendMailModel;
use App\Http\DB\Setting;
use App\Http\DB\MailTemplates;
use Mail;

use App\Http\DB\Category;
use App\Http\DB\SubCategory;
use App\Http\DB\Vendor;

use App\Http\DB\Page;

use App\Http\DB\ServiceRequest;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        try {
            $data = [];
            $data['index'] = '1';
            $data['meta_title'] = 'Quickdone | Home';

            $data['vendor_list_slider']     = Vendor::where('status', '=', '1')
                                                      ->where('is_slider', '=', '1')
                                                      ->get()
                                                      ->random(5);

            $data['category_list']          = Category::where('status', '=', '1')
                                                        ->with('categoryProduct')
                                                        ->get()
                                                        ->random(6);

            $data['vendor_list']            = Vendor::where('status', '=', '1')
                                                      ->get();

            $data['sub_category_list']      = SubCategory::Select('id', 'category_id', 'sub_category_name', 'cover_id', 'status')
                                                           ->where('status', '=', '1')
                                                           ->get();

            return \View::make('frontend.index', $data );
        } catch (Exception $e) {

        }
    }

     public function getCMSPage(Request $request, $slug) 
    {
        try {
            $data   = [];
            $data = [];
            $data['index'] = '1';
            $data['meta_title'] = 'Quickdone | CMS-Page';

            $data['page']   = Page::where('slug', '=', $slug)->first();            

            return \View::make('frontend.cms-page', $data );
        } catch (Exception $e) {
            
        }
    }


    public function inquiry(Request $request)
    {

        try {

            // $data       = $request->all();

            $recored                  = new ServiceRequest;
            $recored->vendor_id       = $request->vendor_id;
            $recored->category_id     = $request->category_id;
            $recored->sub_category_id = $request->sub_category_id;
            $recored->first_name      = $request->first_name;
            $recored->last_name       = $request->last_name;
            $recored->email           = $request->email;
            $recored->mobile_no       = $request->mobile_no;
            $recored->address_1       = $request->address_1;
            $recored->comments        = $request->comments;
            $recored->status          = 1;
            $recored->save();


            $data['vendor']           = Vendor::where('id', '=', $request->vendor_id)->first();
            $data['category']         = Category::where('id', '=', $request->category_id)->first();
            $data['subCategory']      = SubCategory::where('id', '=', $request->sub_category_id)->first();

// dd($data['subCategory']);
            $params = [ '{vendor}'           => @($data['vendor']) ? $data['vendor']->vendor_name : 0,
                        '{category}'         => @($data['category']) ? $data['category']->category_name : 0,
                        '{sub_category}'     => @($data['subCategory']) ? $data['subCategory']->sub_category_name : 0,
                        '{first_name}'       => $request->first_name,
                        '{last_name}'        => $request->last_name,
                        '{email}'            => $request->email,
                        '{mobile_no}'        => $request->mobile_no,
                        '{address_1}'        => $request->address_1,
                        '{comments}'         => $request->comments

                      ];

          $clientMail = $request->email;  //client inquery mail...

            // $mail = SendMailModel::dispatchMail('vender_inquiry_mail_template', $params, 'bhavin.codefarm@outlook.com' );
            $mail = SendMailModel::dispatchMail('vender_inquiry_mail_template', $params, $clientMail );

            $mail = SendMailModel::dispatchMailClient('client_replay_inquiry_mail_template', $params, $clientMail );

            // return \View::make('frontend.index', $data );
        } catch (Exception $e) {

        }
    }
}