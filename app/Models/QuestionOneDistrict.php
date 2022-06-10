<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class QuestionOneDistrict extends Model
{
    use HasFactory;

    public function region(): BelongsTo
    {
        return $this->belongsTo(QuestionOneRegion::class, 'region_id');
    }
}
