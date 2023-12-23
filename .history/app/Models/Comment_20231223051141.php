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
       'proudct_id')->constrained();
        $table->string('name');
        $table->string('email')->unique();
        $table->string('message');
    ];
}
