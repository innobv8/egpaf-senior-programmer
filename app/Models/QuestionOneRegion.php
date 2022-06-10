<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class QuestionOneRegion extends Model
{
    use HasFactory;

    public function districts(): HasMany
    {
        return $this->hasMany(QuestionOneDistrict::class, 'region_id');
    }
}
