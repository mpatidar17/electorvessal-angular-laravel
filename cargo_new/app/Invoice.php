<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'invoice';

    protected $fillable = [ 'companyId', 'periodFrom' , 'periodTo' , 'status' , 'created_at' , 'updated_at' , 'invoiceNumber' , 'paidOn' ,  'total' ];
}