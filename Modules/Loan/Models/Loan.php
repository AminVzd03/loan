<?php

namespace Modules\Loan\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Installment\Models\Installment;
use Modules\User\Models\User;

class Loan extends Model
{
    protected $casts = [
    'installment_ids' => 'array'
];

    public function users() : BelongsTo {
        return $this->belongsTo(User::class);


    }

    public function installments() : HasMany {
        return $this->hasMany(Installment::class);
    }
}
