<?php

namespace Modules\Demand\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\User\Models\User;

class Demand extends Model
{
    protected $fillable = [];

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
