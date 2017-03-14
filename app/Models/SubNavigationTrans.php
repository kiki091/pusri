<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubNavigationTrans extends Model
{
	protected $table = 'sub_menu_trans';
    public $timestamps = true;

    protected $fillable = [
	    'created_at', 
	    'updated_at',
    ];
}