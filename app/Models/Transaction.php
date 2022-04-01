<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $guarded = [];
    
    use HasFactory;

    public function block()
    {
        return $this->belongsTo(Block::class);
    }
}
