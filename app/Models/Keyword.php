<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    /** @use HasFactory<\Database\Factories\KeywordFactory> */
    use HasFactory;
    protected $fillable = [
        'keyword_kode',
        'keyword_artikel_kode',
        'keyword_nama',
        'keyword_slug',
    ];
}
