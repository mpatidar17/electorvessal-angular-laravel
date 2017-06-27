<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CargoDocument extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'corgoDocument';

    protected $fillable = ['cargoId', 'label', 'fileName', 'type', 'description' ,
    'created_at', 'updated_at'];
}


