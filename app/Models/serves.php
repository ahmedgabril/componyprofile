<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class serves extends Model
{
    use HasFactory;
    use HasTranslations;
    public  $guarded  = [];
        public $translatable = ['name','shortdes','des',];
}
