<?php

namespace App\Http\DB;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'subscribers';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'first_name', 
    						'last_name',
    						'email' ];

}
