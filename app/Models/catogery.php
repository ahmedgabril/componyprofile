<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class catogery extends Model
{
    use HasFactory;
    use HasTranslations;
    public $fillable = ['name', 'icon'];

    public $translatable = ['name'];


    public function project(): HasOne
    {
        return $this->hasOne(project::class);
    }
}
