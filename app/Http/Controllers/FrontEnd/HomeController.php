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
use App\Http\DB\TrialIeltsForms;
use App\Http\DB\InquiryForm;
use Mail;
use App\Http\DB\Students;

use App\Http\DB\Page;
use App\Http\DB\Blog;
use App\Http\DB\Galleries;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        try {
            $data = [];
            $data['index'] = '1';
            $data['meta_title'] = 'The English Channel | Home';

            $data['gallery_list'] = Galleries::where('status', 1)->with('cover')->get();

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
            $data['meta_title'] = 'The English Channel | CMS-Page';

            //$data['page']   = Page::where('slug', '=', $slug)->first();            

            return \View::make('frontend.cms-page', $data );
        } catch (Exception $e) {
            
        }
    }

    public function students(Request $request)
    {
        try {
            $data = [];
            $data['index'] = '1';
            $data['meta_title'] = 'The English Channel | Students';
            $data['students'] = Students::where('status', 1)->with('cover')->get();

            return \View::make('frontend.student', $data );
        } catch (Exception $e) {

        }
    }

    public function blogs(Request $request)
    {
        try {
            $data = [];
            $data['index'] = '1';
            $data['meta_title'] = 'The English Channel | Blogs';

            $data['blog_list'] = Blog::where('status', 1)->with('cover')->get();
 
            return \View::make('frontend.blog', $data );
        } catch (Exception $e) {

        }
    }

    public function blogDetails(Request $request, $slug)
    {
        try {

            $data = [];
            $data['index'] = '1';
            
            $data['blog_detail'] = Blog::where('status', 1)->with('cover')->where('slug', '=', $slug)->first();

            $data['setting_detail'] = Setting::first();
            
            $data['meta_title'] = 'The English Channel | '.$data['blog_detail']->title;

 
            return \View::make('frontend.blog-details', $data );
        } catch (Exception $e) {

        }
    }

    public function trialIELTS(Request $request)
    {
        try {
            $data = [];
            $data['index'] = '1';
            $data['meta_title'] = 'The English Channel | Trial IELTS';

            return \View::make('frontend.trial-ielts', $data );
        } catch (Exception $e) {

        }
    }

    public function saveTrialIELTS(Request $request)
    {

        try {

            
            $trial_ielts_forms                            = new TrialIeltsForms;
            $trial_ielts_forms->full_name                 = $request->full_name;
            $trial_ielts_forms->email                     = $request->email;
            $trial_ielts_forms->contact_number            = $request->contact_number;
            $trial_ielts_forms->module                    = $request->module;
            $trial_ielts_forms->test_date                 = $request->test_date;
            $trial_ielts_forms->exposure                  = $request->exposure;
            $trial_ielts_forms->exam_date                 = $request->exam_date;
            $trial_ielts_forms->reason_choosing_ielts_ans = $request->reason_choosing_ielts_ans;
            $trial_ielts_forms->payment_detail_contact    = implode("###",$request->payment_detail_contact);
            $trial_ielts_forms->save();


            
            // dd($data['subCategory']);
            /*$params = [ '{vendor}'           => @($data['vendor']) ? $data['vendor']->vendor_name : 0,
                        '{category}'         => @($data['category']) ? $data['category']->category_name : 0,
                        '{sub_category}'     => @($data['subCategory']) ? $data['subCategory']->sub_category_name : 0,
                        '{first_name}'       => $request->first_name,
                        '{last_name}'        => $request->last_name,
                        '{email}'            => $request->email,
                        '{mobile_no}'        => $request->mobile_no,
                        '{address_1}'        => $request->address_1,
                        '{comments}'         => $request->comments

                      ];*/

          //$clientMail = $request->email;  //client inquery mail...

            // $mail = SendMailModel::dispatchMail('vender_inquiry_mail_template', $params, 'bhavin.codefarm@outlook.com' );
            //$mail = SendMailModel::dispatchMail('vender_inquiry_mail_template', $params, $clientMail );

            //$mail = SendMailModel::dispatchMailClient('client_replay_inquiry_mail_template', $params, $clientMail );

            // return \View::make('frontend.index', $data );
            return redirect('trial-ielts');
        } catch (Exception $e) {

        }
    }

    public function saveContactForm(Request $request)
    {

        try {

            //echo "<pre>"; print_r($request->all()); exit;

            $inquiry_form                  = new InquiryForm;
            $inquiry_form->first_name      = $request->name;
            $inquiry_form->email           = $request->email;
            $inquiry_form->subject         = $request->subject;
            $inquiry_form->comments        = $request->comments;
            $inquiry_form->save();
            
            // return \View::make('frontend.trial-ielts', $data );
            return Redirect::back();


        } catch (Exception $e) {

        }
    }
}
