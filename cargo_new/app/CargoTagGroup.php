<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CargoTagGroup extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'cargoTagGroup';

    protected $fillable = ['companyId', 'name', 'description', 'order', 'created_at', 'updated_at'];

    public function cargoTextTags(){
    	return $this->hasMany('App\CargoTextTag','cargoTagGroupId','id');
    }
    
}
