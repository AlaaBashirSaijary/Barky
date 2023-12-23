<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        return $this->belongsToMany(Pro::class , 'proudct_team');
    }
}

