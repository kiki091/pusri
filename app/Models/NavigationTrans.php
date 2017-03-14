<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NavigationTrans extends Model
{
	protected $table = 'menu_trans';
    public $timestamps = true;

    protected $fillable = [
	    'created_at', 
	    'updated_at',
    ];
}