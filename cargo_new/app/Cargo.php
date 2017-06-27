<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cargo';

    protected $fillable = ['companyId', 'agentId', 'customerId', 'images' , 'storageLocationId','status', 'created_at', 'updated_at', 'width' , 'height' , 'depth' , 'weight' , 'type'];
}