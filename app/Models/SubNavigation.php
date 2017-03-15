<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubNavigation extends Model
{
	protected $table = 'sub_menu';
    public $timestamps = true;

    protected $fillable = [
	    'created_at', 
	    'updated_at',
	    'updated_by',
    ];

    public function sub_menu_trans()
    {
        return $this->hasMany('App\Models\SubNavigationTrans', 'sub_menu_id', 'id')->where('locale', '=' , $this->getCurrentLocalize());
    }


    /***************** Scope *****************/

    /**
     * @param $query
     */
    public function scopeMenuId($query, $params = true)
    {
        return $query->where('menu_id', $params);
    }
}