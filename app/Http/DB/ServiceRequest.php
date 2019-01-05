<?php

namespace App\Http\DB;

use Illuminate\Database\Eloquent\Model;

class ServiceRequest extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'service_requests';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'category_id',
    						            'sub_category_id',
                            'vendor_id',
                            'first_name',
                            'last_name',
                            'email',
                            'mobile_no',
                            'phone_no',
                            'address_1',
                            'address_2',
                            'city_name',
                            'zip_code',
                            'state_name',
                            'status',
                            'comments' ];

    public function category() {
        return $this->hasOne('App\Http\DB\Category', 'id', 'category_id');
    }

    public function subcategory() {
        return $this->hasOne('App\Http\DB\SubCategory', 'id', 'sub_category_id');
    }

    public function vendor() {
        return $this->hasOne('App\Http\DB\Vendor', 'id', 'vendor_id');
    }
}
