<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class fact extends Model
{
    use HasFactory;

    use HasTranslations;
    public $fillable = ['name', 'icon','number'];

    public $translatable = ['name'];
}
