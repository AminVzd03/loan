<?php

namespace Modules\Demand\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Demand extends Model
{
    protected $fillable = [];

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
