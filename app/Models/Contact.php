<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /** @use HasFactory<\Database\Factories\ContactFactory> */
    use HasFactory;
    protected $fillable = [
        'contact_uuid',
        'contact_nama',
        'contact_email',
        'contact_hp',
        'contact_subjek',
        'contact_isi',
        'contact_status',
    ];
}
