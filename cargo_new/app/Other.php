<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Other extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'other';

    protected $fillable = ['cargoId', 'title', 'specification', 'created_at', 'updated_at'];
}
