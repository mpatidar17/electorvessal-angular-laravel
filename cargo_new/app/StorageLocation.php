<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StorageLocation extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'storageLocation';

    protected $fillable = ['companyId', 'label', 'address1', 'address2', 'city' , 'state' , 'country' , 'zipCode' , 'created_at', 'updated_at'];

}
