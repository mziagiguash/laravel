<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Star extends Model
{
    use HasFactory;

    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
    }
}
