<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class info extends Model
{
    use HasFactory;
    use HasTranslations;
    public $fillable = ['logo','address','compony_name'];

    public $translatable = ['address','compony_name'];
}
