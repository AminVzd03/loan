<?php

namespace Modules\Installment\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Loan\Models\Loan;

class Installment extends Model
{
    protected $fillable = ['due_date','paid_at'];

    public function loans(): BelongsTo
    {
        return $this->belongsTo(Loan::class);
    }
}
