<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    // Table name (Laravel would guess 'reviews' automatically, but we can keep it explicit)
    protected $table = 'reviews';

    // Fillable columns
    protected $fillable = [
        'title',
        'body',
        'user_id',
        'status',
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
