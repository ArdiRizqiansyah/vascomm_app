<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    protected $fillable = [
        'name',
        'price',
        'is_active',
    ];

    public function getImageAttribute()
    {
        $mediaItems = $this->getFirstMediaUrl('image');
        $imgDefault = asset('assets/images/default-image.png');

        if ($mediaItems) {
            return $mediaItems;
        } else {
            return $imgDefault;
        }
    }

    public function getFormatCreatedDateAttribute()
    {
        return Carbon::parse($this->created_at)->locale('id')->isoFormat('DD MMMM YYYY');
    }

    public function getFormatPriceAttribute()
    {
        return 'Rp. ' . number_format($this->price, 0, ',', '.');
    }
}
