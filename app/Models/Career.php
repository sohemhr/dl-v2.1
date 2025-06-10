<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    /** @use HasFactory<\Database\Factories\CareerFactory> */
    use HasFactory;
    protected $fillable = [
        'career_uuid',
        'career_kode',
        'career_judul',
        'career_slug',
        'career_deskripsi',
        'career_foto',
        'career_author',
        'career_tanggal_mulai',
        'career_tanggal_selesai',
        'career_status',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {

            // produce a slug based on the activity title
            $slug = Str::slug($model->career_judul);

            // check to see if any other slugs exist that are the same & count them
            $count = static::whereRaw("career_slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();

            // if other slugs exist that are the same, append the count to the slug
            $model->career_slug = $count ? "{$slug}-{$count}" : $slug;
        });
    }
}
