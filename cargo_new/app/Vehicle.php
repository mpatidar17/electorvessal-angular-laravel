<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'vehicle';
    protected $fillable = 
    ['cargoId', 'vin', 'make', 
    'model','type', 'year', 'key','title_status', 
    'title_number' , 'state','color', 'operation_status', 
    'dismantled_status', 'created_at', 'updated_at']; 
} 
 
