<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgentsCustomers extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'agentsCustomers';

    protected $fillable = [
        'agentId','customerId','created_at','updated_at'
    ];
}
