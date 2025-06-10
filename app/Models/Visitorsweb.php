<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitorsweb extends Model
{
    /** @use HasFactory<\Database\Factories\VisitorswebFactory> */
    use HasFactory;
    protected $table = 'visitors_webs';
    protected $fillable = [
        'ip_address',
    ];
}
