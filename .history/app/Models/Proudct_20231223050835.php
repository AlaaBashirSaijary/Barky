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
        $table->string('type');
        $table->string('image');
        $table->string('subtitle');
        $table->string('price');
        $table->string('descrption');
        $table->date('deliveryDate');
    ];
}
