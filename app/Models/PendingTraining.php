<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendingTraining extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'billing_id',
        'company',
        'address',
        'contact',
        'position',
        'phone',
        'email',
        'fax',
        'training_reserve',
        'code_train',
        'fee',
        'number_participants',
        'date_reserve',
        'special_request',
        'reserve_name',
        'reserve_position',
        'reserve_tel',
        'reserve_email',
        'status',
    ];

    public function otherTrainings()
    {
        return $this->hasMany(OtherTraining::class, 'pending_id');
    }

    public function billingTo()
    {
        return $this->belongsTo(BillingTo::class, 'billing_id');
    }
}
