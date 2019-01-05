<?php

namespace App\Http\DB;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'vendors';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'cover_id', 
    						'category_id',
    						'sub_category_id',
                            'vendor_name', 
                            'slug', 
                            'address_1', 
                            'address_2', 
                            'city_name', 
                            'zip_code', 
                            'state_name', 
                            'email', 
                            'mobile_no', 
                            'phone_no', 
                            'summary' ];

    public function cover() {
        return $this->hasOne('App\Http\DB\Media', 'id', 'cover_id');
    }

    public function category() {
        return $this->hasOne('App\Http\DB\Category', 'id', 'category_id');
    }
    
    public function subcategory() {
        return $this->hasOne('App\Http\DB\SubCategory', 'id', 'sub_category_id');
    }
}

