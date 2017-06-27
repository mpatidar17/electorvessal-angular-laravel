<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CargoTagValue extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'cargoTagValue';

    protected $fillable = ['cargoTextTagId', 'cargoId' , 'value' ,'created_at', 'updated_at'];
}
