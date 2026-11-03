<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitorLog extends Model
{
    use HasFactory;
    protected $fillable = [
        'ip_address',
        'gclid',
        'utm_source',
        'utm_medium',
        'utm_campaign',
        'utm_term',
        'utm_content',
        'landing_page',
        'referrer',
        'user_agent',
        'session_id',
    ];
}
