<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\LaravelPackageTools\Concerns\Package\HasTranslations;

class Link extends Model implements HasMedia
{
     /** @use HasFactory<LinkFactory> */
    use HasFactory;

    use HasTranslations;
    use InteractsWithMedia;

    /** @var string[] */
    public $translatable = [
        'title',
        'description',
    ];

    protected $table = 'blog_links';

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('link-images')
            ->useDisk('link-images')
            ->acceptsMimeTypes(['image/jpeg'])
            ->singleFile()
            ->registerMediaConversions(function (Media $media): void {
                $this
                    ->addMediaConversion('thumb')
                    ->width(256)
                    ->height(144);
            });
    }
}
