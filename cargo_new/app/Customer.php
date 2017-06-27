<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'customer';

    protected $fillable = ['companyId', 'agentId' , 'firstName', 'middleInitial', 'lastName' , 'email','password', 'activeStatus' ,'created_at', 'updated_at'];
}
