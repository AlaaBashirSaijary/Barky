<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * Get all of the comments for the Team
 *
 * @return \Illuminate\Database\Eloquent\Relations\HasMany
 */
public function comments(): HasMany
{
    return $this->hasMany(Comment::class, 'foreign_key', 'local_key');
}
class Team extends Model
{
    use HasFactory;
}
