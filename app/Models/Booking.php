<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public $table = "bookings";

    protected $fillable=[
        'booking_date',
        'booking_from',
        'booking_to',
        'reserver_name',
        'mail',
        'phone',
        'agree_conditions',
        'published_at',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'published_at' => 'timestamp',
    ];
    use HasFactory;
}
