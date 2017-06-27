<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'company';

    protected $fillable = [ 'name', 'logo', 'description', 'created_at', 'updated_at' ];
}
