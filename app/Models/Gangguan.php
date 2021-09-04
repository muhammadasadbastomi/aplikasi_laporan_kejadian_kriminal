<?php

namespace App\Models;

use App\Models\Camat;
use App\Models\Desa;
use App\Models\Kasi;
use App\Models\LampiranGangguan;
use App\Models\Petugas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Gangguan extends Model
{
    protected $guarded = ['id'];

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

    public function desa(): BelongsTo
    {
        return $this->belongsTo(Desa::class);
    }

    /**
     * Get all of the lampiran_gangguan for the Gangguan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lampiran_gangguan(): HasMany
    {
        return $this->hasMany(LampiranGangguan::class);
    }
}
