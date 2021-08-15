<?php

namespace App\Models;

use App\Models\Camat;
use App\Models\Kasi;
use App\Models\Petugas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kegiatan extends Model
{
    protected $guarded = ['id'];

    /**
     * Get the camat that owns the Kegiatan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function camat(): BelongsTo
    {
        return $this->belongsTo(Camat::class);
    }

    public function kasi(): BelongsTo
    {
        return $this->belongsTo(Kasi::class);
    }

    public function petugas(): BelongsTo
    {
        return $this->belongsTo(Petugas::class);
    }
}
