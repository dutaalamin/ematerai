<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StampingHistory extends Model
{
    /** @use HasFactory<\Database\Factories\StampingHistoryFactory> */
    use HasFactory;

    protected $fillable = ['user_id', 'filename', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
