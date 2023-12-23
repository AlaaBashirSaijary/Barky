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

        'type',
       'image',
        'subtitle',
        'price',
        'descrption';
       'deliveryDate';
    ];
}
