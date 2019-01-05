<?php

namespace App\Http\DB;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categories';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'cover_id', 
                            'category_name', 
                            'slug', 
                            'summary' ];

    public function cover() {
        return $this->hasOne('App\Http\DB\Media', 'id', 'cover_id');
    }

    public function categoryProduct() {
        return $this->hasOne('App\Http\DB\Vendor', 'category_id', 'id');
    }
}
