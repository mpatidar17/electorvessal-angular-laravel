<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoiceItem extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'invoiceItem';

    protected $fillable = [ 'invoiceId', 'subscriptionId' , 'quantity' , 'total' , 'created_at' , 'updated_at'  ]; 
}