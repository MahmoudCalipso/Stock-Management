<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class ProductCategory extends Model implements HasMedia
{
    use SoftDeletes, HasMediaTrait;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
        'deleted_at',
        'description',
    ];

    public function getphotoAttribute()
    {
        $file = $this->getMedia('photo')->last();

        if ($file) {
            $file->url = $file->getUrl();
        }

        return $file;
    }
}
