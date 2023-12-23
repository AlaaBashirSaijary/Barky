<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\P;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'description',
        'image',
        'soicalMedia'
    ];
    public function proudcts():BelongsToMany{
        return $this->belongsToMany(Proudct::class , 'proudct_team');
    }
}

