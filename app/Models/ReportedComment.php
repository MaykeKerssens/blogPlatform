<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportedComment extends Model
{
    use HasFactory;

    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }

    public function reporter()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
