<?php

namespace App\Http\DB;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostCategory extends Model {
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'post_categories';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'create_by', 
                            'update_by', 
                            'name', 
                            'slug', 
                            'status', ];

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}
