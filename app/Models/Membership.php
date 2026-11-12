<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Membership extends Model
{
    use HasFactory;

    protected $fillable = [
        "member_id",
        "startDate",
        "endDate",
        "isActive",
        "billingCycle",
        "price",
    ];

    protected function casts(): array
    {
        return [
            "startDate" => "date",
            "endDate" => "date",
            "isActive" => "boolean",
            "price" => "decimal:2",
        ];
    }

    public function member(): BelongsTo
    {
        return $this->belongsTo(Member::class);
    }
}
