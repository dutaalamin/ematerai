<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserQuota extends Model
{
    /** @use HasFactory<\Database\Factories\UserQuotaFactory> */
    use HasFactory;

    protected $fillable = ['user_id', 'quota_balance'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
