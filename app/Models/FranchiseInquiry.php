<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FranchiseInquiry extends Model
{
    protected $fillable = [
        'full_name',
        'contact_number',
        'email',
        'preferred_location',
        'investment_budget',
        'message',
        'status',
    ];

    public const STATUSES = ['New', 'Contacted', 'Negotiating', 'Approved', 'Rejected'];
}
