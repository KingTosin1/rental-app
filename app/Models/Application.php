<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'address',
        'marital_status',
        'children_count',
        'occupancy_length',
        'move_in_date',
        'pets',
        'smokers_count',
        'ever_evicted',
        'vacating_reason',
        'employer_name',
        'occupation',
        'employment_length',
        'monthly_income',
        'landlord_name',
        'landlord_phone',
        'next_of_kin',
        'relationship',
        'next_of_kin_phone',
        'authorized_check',
        'information_verified',
    ];

    protected $casts = [
        'pets' => 'boolean',
        'ever_evicted' => 'boolean',
        'authorized_check' => 'boolean',
        'information_verified' => 'boolean',
        'move_in_date' => 'date',
        'children_count' => 'integer',
        'smokers_count' => 'integer',
        'monthly_income' => 'decimal:2',
    ];
}

