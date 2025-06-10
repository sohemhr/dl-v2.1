<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    /** @use HasFactory<\Database\Factories\ArtikelFactory> */
    use HasFactory;
    protected $fillable = [
        'artikel_uuid',
        'artikel_kode',
        'artikel_kategori_kode',
        'artikel_judul',
        'artikel_slug',
        'artikel_deskripsi',
        'artikel_foto',
        'artikel_tag',
        'artikel_author',
        'artikel_tanggal',
        'artikel_status',
    ];
    
    

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {

            // produce a slug based on the activity title
            $slug = Str::slug($model->artikel_judul);

            // check to see if any other slugs exist that are the same & count them
            $count = static::whereRaw("artikel_slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();

            // if other slugs exist that are the same, append the count to the slug
            $model->artikel_slug = $count ? "{$slug}-{$count}" : $slug;
        });
    }
}
