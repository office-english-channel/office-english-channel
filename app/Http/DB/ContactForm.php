<?php

namespace App\Http\DB;

use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'contact_forms';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'first_name', 
    						'last_name',
    						'subject',
    						'comments',
    						'email' ];
}
