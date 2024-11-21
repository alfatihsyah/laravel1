<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction_detail extends Model
{
    use HasFactory;
    protected $table = 'transaction_detail';
    protected $fillable = [
        'traansaction_id',
        'movie',
        'quantity',
    ];
    public $tamestamps = true ;    
}
