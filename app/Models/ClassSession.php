<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ClassSession extends Model
{
    use HasFactory;

    protected $fillable = [
        "center_id",
        "teacher_id",
        "name",
        "description",
        "schedule",
        "capacity",
        "status",
        "classType",
        "room",
    ];

    public function enrollments(): HasMany
    {
        return $this->hasMany(Enrollment::class);
    }
    public function center(): BelongsTo
    {
        return $this->belongsTo(Center::class);
    }
    public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }

    public function member(): BelongsToMany
    {
        return $this->belongsToMany(Member::class, "enrollments")
            ->WithPivot("id", "date", "status")
            ->withTimestamps();
    }
}
