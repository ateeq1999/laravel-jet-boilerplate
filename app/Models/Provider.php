<?php

namespace App;

use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;
use \DateTimeInterface;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Provider extends Model implements HasMedia
{
    use SoftDeletes, HasMediaTrait, Auditable;

    public $table = 'providers';

    protected $appends = [
        'bg_image',
        'logo_image',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public static $translatedAttributes = [
        'name'
    ];

    protected $fillable = [
        'phone',
        'address',
        'email',
        'latitude',
        'longitude',
        'type_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')->width(50)->height(50);
    }

    public function providerServices()
    {
        return $this->hasMany(Service::class, 'provider_id', 'id');
    }

    public function providerFeatures()
    {
        return $this->hasMany(Feature::class, 'provider_id', 'id');
    }

    public function providerReviews()
    {
        return $this->hasMany(Review::class, 'provider_id', 'id');
    }

    public function getBgImageAttribute()
    {
        $file = $this->getMedia('bg_image')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
        }

        return $file;
    }

    public function getLogoImageAttribute()
    {
        $file = $this->getMedia('logo_image')->last();

        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
        }

        return $file;
    }

    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }
}
