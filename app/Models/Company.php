<?php

namespace App\Models;

use App\Models\BaseModel;

class Company extends BaseModel
{
	protected $table = 'company_profile';
    public $timestamps = true;

    protected $fillable = [
	    'created_at', 
	    'updated_at',
        'is_active'
    ];

    protected $guarded = [];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function translations()
    {
        return $this->hasMany('App\Models\CompanyTrans', 'company_profile_id', 'id');
    }

    /**
     * @return mixed
     */
    public function translation()
    {
        return $this->belongsTo('App\Models\CompanyTrans', 'id', 'company_profile_id')->where('locale', '=' , $this->getCurrentLocalize());
    }

    /***************** Scope *****************/

    /**
     * @param $query
     */
    public function scopeIsActive($query, $params = true)
    {
        return $query->where('is_active', $params);
    }

    /**
     * @param $query
     */
    public function scopeId($query, $params = '')
    {
        return $query->where('id', $params);
    }
}