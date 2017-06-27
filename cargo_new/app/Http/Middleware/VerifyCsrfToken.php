<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'companyUserLogin',
        'agent',
        'customer',
        'subscription',
        'invoice',
        'invoiceItem',
        'cargoTagGroup',
        'storagelocation',
        '/agent/update',
        '/customer/update',
        '/subscription/update',
        '/invoice/update',
        '/storagelocation/update',
        '/invoiceItem/update',
        '/cargoTagGroup/update',
    ];
}
