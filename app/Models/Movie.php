<?php

namespace App\Models;

use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $fillable =[
        'title',
        'voteavarage',
        'overview',
        'posterpath',
        'category_id',
    ];
    public $timestamps = true ;
}
