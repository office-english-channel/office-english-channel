<?php

namespace App\HTTP\DB;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'menus';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 
                            'parent_menu_id', 
                            'page_id', 
                            'post_category_id', 
                            'category_id', 
                            'name', 
                            'slug', 
                            'menu_type', 
                            'status', 
                            'sequence_number' 
                        ];

    use SoftDeletes;

    public function page() {
        return $this->hasOne('App\Http\DB\Page', 'id', 'page_id');
    }

    public function postcategory() {
        return $this->hasOne('App\Http\DB\PostCategory', 'id', 'post_category_id');
    }

    public function category() {
        return $this->hasOne('App\Http\DB\Menu', 'id', 'parent_menu_id');
    }

}

