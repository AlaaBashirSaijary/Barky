<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MaKer;
use App\Models\Comments;
class Proudct extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'password',
        0('type');
        0('image');
        0('subtitle');
        0('price');
        0('descrption');
        0deliveryDate');
    ];
}
