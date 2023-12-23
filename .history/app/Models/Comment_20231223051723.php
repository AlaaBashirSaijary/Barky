<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MaKer;
use App\Models\Proudct;
class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
       'proudct_id',
       'name',
       'email',
       'message'
    ];
    public function pr(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
