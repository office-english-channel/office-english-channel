<?php

namespace App\Http\Composers;

use Illuminate\View\View;
use Sentinel;
use App\Http\DB\Setting;
use App\Http\DB\FooterLink;
use App\Http\DB\Page;

class FooterMenuComposer
{
    public function __construct()
    {
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $footer_list = [ 'first_column' => '', 'second_column' => '' ];

        try {
            $footer_list['first_column']    = FooterLink::with('page')->where('column_number', '=', '1')->where('status', '1')->get();
            $footer_list['second_column']   = FooterLink::with('page')->where('column_number', '=', '2')->where('status', '1')->get();
            
        } catch (Exception $e) {
            
        }

        $view->with('footer_list', $footer_list);
    }
}