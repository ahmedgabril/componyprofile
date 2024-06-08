<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class setting extends Model
{
    use HasFactory;
    use HasTranslations;
    public $fillable = ['compony_name','shortdes','hearotitle','logo','hearoimg'];

    public $translatable = ['compony_name','shortdes','hearotitle'];
}
