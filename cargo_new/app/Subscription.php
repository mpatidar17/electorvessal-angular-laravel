<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'subscription';

    protected $fillable = [ 'name', 'description' , 'price' , 'created_at' , 'updated_at' ];
}
