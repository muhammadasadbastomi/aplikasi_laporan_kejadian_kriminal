<?php

namespace App\Models;

use App\Models\Petugas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Jadwal extends Model
{
    protected $guarded = ['id'];

    /**
     * Get the petugas that owns the Jadwal
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function petugas(): BelongsTo
    {
        return $this->belongsTo(Petugas::class);
    }
}
