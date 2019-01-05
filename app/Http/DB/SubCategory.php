<?php

namespace App\Http\DB;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sub_categories';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'cover_id', 
    						'category_id',
                            'sub_category_name', 
                            'slug', 
                            'summary' ];

    public function cover() {
        return $this->hasOne('App\Http\DB\Media', 'id', 'cover_id');
    }

    public function category() {
        return $this->hasOne('App\Http\DB\Category', 'id', 'category_id');
    }
}
