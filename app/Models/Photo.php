<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Photo extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function galeri()
    {
        return $this->belongsTo(Galeri::class);
    }
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => asset('../storage/photos/' . $value),
        );
    }
}