<?php

namespace App\Models;

use App\Models\Jabatan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kasi extends Model
{
    protected $guarded = ['id'];

    public function jabatan(): BelongsTo
    {
        return $this->belongsTo(Jabatan::class);
    }
}
