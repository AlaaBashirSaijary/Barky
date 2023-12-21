<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use /**
 * Get all of the comments for the Team
 *
 * @return \
 */
public function comments(): HasMany
{
    return $this->hasMany(Comment::class, 'foreign_key', 'local_key');
}
class Team extends Model
{
    use HasFactory;
}
