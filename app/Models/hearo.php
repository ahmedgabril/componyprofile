<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class hearo extends Model
{
    use HasFactory;
    use HasTranslations;
    public $fillable = ['shortdes','hearotitle','hearoimg'];

    public $translatable = ['shortdes','hearotitle'];
}
