<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Enrollment extends Model
{
    use HasFactory;

    protected $fillable = ["member_id", "class_session_id", "date", "status"];

    public function member(): BelongsTo
    {
        return $this->belongsTo(Member::class);
    }

    public function classSession(): BelongsTo
    {
        return $this->belongsTo(ClassSession::class);
    }
}
