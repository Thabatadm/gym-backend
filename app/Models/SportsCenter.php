<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
class SportsCenter extends Model
{
    use HasFactory;
    protected $fillable = ["name", "phone", "email"];
    public function centers(): HasMany
    {
        return $this->hasMany(Center::class);
    }
}
