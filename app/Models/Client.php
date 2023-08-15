<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'address',
        'date_of_birth',
        'nationality',
        'gender',
        'occupation',
        'company_name',
        'company_address',
        'company_registration_number',
        'legal_representative_id',
        'billing_information',
        'payment_history',
        'retainer_agreement',
        'conflict_of_interest',
        'source_of_referral',
        'notes',
    ];
}
