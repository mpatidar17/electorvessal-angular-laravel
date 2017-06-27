<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'agent';

    protected $fillable = ['companyId', 'firstName', 'middleInitial', 'lastName' , 'email','password', 'activeStatus' ,'created_at', 'updated_at'];
}
