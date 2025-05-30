<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Loan extends Model
{
    protected $casts = [
    'installment_ids' => 'array'
];

    public function users() : BelongsTo {
        return $this->belongsTo(User::class);
    }
}
