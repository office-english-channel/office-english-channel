<?php

namespace App\Http\Composers;

use Illuminate\View\View;
use Sentinel;
use App\Http\DB\Menu;
use App\Http\DB\SubCategory;
use App\Http\DB\Page;
use App\Http\DB\PostCategory;

class MainHeaderComposer
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
        $menu_list = [];

        try {
            $menus = Menu::with('page')->whereNull('parent_menu_id')->where('status', '=', '1')->orderBy('sequence_number')->get();

            foreach($menus AS $record) {
                $sub_menu = [];
                //Menu is Main Menu
                if($record->menu_type == '1') { 
                    $sub_list = Menu::with('page')->where('status', '=', '1')->where('parent_menu_id', '=', $record->id)->orderBy('sequence_number')->get();

                    if(count($sub_list) > 0) {
                        foreach($sub_list AS $sub_record) {

                            if($sub_record->menu_type == '2') {
                                $sub_menu[] = [ 'label' => $sub_record->name, 'slug' => \URL::route('frontend.cmspage', [ 'slug' => $sub_record->page->slug ]) ];
                            } else if($sub_record->menu_type == '3') {
                                $sub_menu[] = [ 'label' => $sub_record->name, 'slug' => \URL::route('frontend.posts.list', [ 'slug' => $sub_record->postcategory->slug ]) ];
                            } else if($sub_record->menu_type == '4') {
                                $sub_menu[] = [ 'label' => $sub_record->name, 'slug' => \URL::route('frontend.posts.list', [ 'slug' => $sub_record->category->slug ]) ];
                            }
                        }
                    }

                    $menu_list[] = [ 'label' => $record->name, 'slug' => '', 'sub_menu' => $sub_menu ]; 
                //Menu is Page Link
                } else if($record->menu_type == '2') {
                    $menu_list[] = [ 'label' => $record->name, 'slug' => \URL::route('frontend.cmspage', [ 'slug' => $record->page->slug ]), 'sub_menu' => [] ]; 
                //Menu is Post Page
                } else if($record->menu_type == '3') {
                    $menu_list[] = [ 'label' => $record->name, 'slug' => \URL::route('frontend.posts.list', [ 'slug' => $record->postcategory->slug, 'sub_menu' => [] ]) ];
                //Menu is Product Category
                } else if($record->menu_type == '4') {
                    // $sub_list = SubCategory::where('category_id', '=', $record->category_id)->where('status', '=', '1')->orderBy('sequence_number', 'ASC')->get();

                    // $sub_menu = [];
                    // if(count($sub_list) > 0) {
                    //     foreach($sub_list AS $sub_record) {
                    //         $sub_menu[] = [ 'label'   => $sub_record->title, 'slug'   => \URL::route('frontend.product.filter', [ 'slug'  => 'category-'.$record->category->slug.'/subcategory-'.$sub_record->slug ]) ];
                    //     }
                    // }

                    // $menu_list[] = [ 'label' => $record->name, 'slug' => \URL::route('frontend.posts.list', [ 'slug' => $record->category->slug ]), 'sub_menu' => $sub_menu ];
                }
            } 

        } catch (Exception $e) {
            
        }

        $view->with('menu_list', $menu_list);
    }
}