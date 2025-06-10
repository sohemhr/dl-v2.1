<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    /** @use HasFactory<\Database\Factories\PromoFactory> */
    use HasFactory;
    protected $fillable = [
        'promo_uuid',
        'promo_kode',
        'promo_judul',
        'promo_slug',
        'promo_deskripsi',
        'promo_foto',
        'promo_author',
        'promo_tanggal_mulai',
        'promo_tanggal_selesai',
        'promo_status',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {

            // produce a slug based on the activity title
            $slug = Str::slug($model->promo_judul);

            // check to see if any other slugs exist that are the same & count them
            $count = static::whereRaw("promo_slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();

            // if other slugs exist that are the same, append the count to the slug
            $model->promo_slug = $count ? "{$slug}-{$count}" : $slug;
        });
    }
}
