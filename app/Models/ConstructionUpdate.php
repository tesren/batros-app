<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\MediaCollections\Models\Media;


class ConstructionUpdate extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    protected $casts = [
        'date' => 'date'
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('responsive-conversion')->withResponsiveImages();
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('portraitc')->singleFile();
        $this->addMediaCollection('galleryc');
    }
}
