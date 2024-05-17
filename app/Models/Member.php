<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'membership_type',
        'membership_start_date',
        'membership_end_date'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
