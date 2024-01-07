<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillingTo extends Model
{
    use HasFactory;

    protected $fillable = [
        'bil_company',
        'bil_branch',
        'bil_address',
        'bil_tax_id',
        'bil_contact',
        'bil_title',
        'bil_phone',
        'bil_email',
        'bil_fax',
    ];

    public function pendingTraining()
    {
        return $this->hasOne(PendingTraining::class, 'billing_id');
    }
}
