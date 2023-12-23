<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Proudct;
use App\Models\Comments;
class Maker extends Model
{
    use HasFactory;
    protected $fillable = [
        'proudct_id'
    ];
}
