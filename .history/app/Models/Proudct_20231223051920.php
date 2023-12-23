<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MaKer;
use App\Models\Comments;
use App\Models\Team;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Proudct extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
       'image',
        'subtitle',
        'price',
        'descrption',
       'deliveryDate'
    ];
    public function teams():BelongsToMany{
        return $this->belongsToMany(Team::class , 'proudct_team');
    }
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
