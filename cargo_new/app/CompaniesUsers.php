<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompaniesUsers extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'companiesUsers';

    protected $fillable = [
        'userId','companyId','type', 'created_at', 'updated_at'
    ];
}
