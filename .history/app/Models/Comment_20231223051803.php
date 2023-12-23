<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MaKer;
use App\Models\Proudct;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
       'proudct_id',
       'name',
       'email',
       'message'
    ];
    public function proudct(): BelongsTo
    {
        return $this->belongsTo(Proudct::class);
    }
}
