<?php

namespace App\HTTP\DB;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FooterLink extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'footer_links';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 
                            'page_id', 
                            'post_category_id', 
                            'name', 
                            'slug', 
                            'menu_type', 
                            'status', 
                            'sequence_number', 
                            'column_number'
                        ];

    use SoftDeletes;

    public function page() 
    {
        return $this->hasOne('App\Http\DB\Page', 'id', 'page_id');
    }

    public function postCategory() 
    {
        return $this->hasOne('App\Http\DB\PostCategory', 'id', 'post_category_id');
    }
}
