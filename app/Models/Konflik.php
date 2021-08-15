<?php

namespace App\Models;

use App\Models\Desa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Konflik extends Model
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
}
