<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        // Add other order fields here, e.g., 'user_id', 'total_amount', etc.
    ];

    /**
     * Get the payments associated with this order.
     */
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
