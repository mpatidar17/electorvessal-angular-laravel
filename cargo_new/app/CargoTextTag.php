<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CargoTextTag extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'cargoTextTag';

    protected $fillable = ['cargoTagGroupId', 'label', 'description', 'required', 'created_at', 'updated_at'];

    public function cargoTagValue(){
      return $this->hasOne('App\CargoTagValue','cargoTextTagId','id');
    }

    public function cargoTagValueByCargoId() {
        return $this->cargoTagValue()->where('cargoId','=', $_GET['cargoId'] );
    }
}
