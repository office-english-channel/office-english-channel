<?php

namespace App\Http\Composers;

use Illuminate\View\View;
use Sentinel;
use App\Http\DB\General\Setting;

class SettingDataComposer
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
        $contact_details = [ 'facebook_url' => '', 'twitter_url' => '', 'linkedin_url' => '', 'youtube_url' => '', 'google_plus_url' => '', 'pinterest_url' => '', 'instagram_url' => '' ];
        
        try {
            $settings_date = Setting::first();

            if(count($settings_date) > 0) {
                $contact_details['facebook_url']      = $settings_date->facebook_url;
                $contact_details['twitter_url']       = $settings_date->twitter_url;
                $contact_details['linkedin_url']      = $settings_date->linkedin_url;
                $contact_details['youtube_url']       = $settings_date->youtube_url;
                $contact_details['google_plus_url']   = $settings_date->google_plus_url;
                $contact_details['pinterest_url']     = $settings_date->pinterest_url;
                $contact_details['instagram_url']     = $settings_date->instagram_url;
            }
            
        } catch (Exception $e) {
            
        }

        $view->with('settings_date', $settings_date);
    }
}