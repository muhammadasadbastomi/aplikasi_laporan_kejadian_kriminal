<?php

namespace App\Models;

use App\Models\Jabatan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Camat extends Model
{
    protected $guarded = ['id'];

    /**
     * Get the jabatan that owns the Camat
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function jabatan(): BelongsTo
    {
        return $this->belongsTo(Jabatan::class);
    }

}
