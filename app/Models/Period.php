<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public $table = 'periods';
    protected $fillable = [
        'appointment_day_id',
        'appointment_from',
        'appointment_to',
        'indexxing',
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
}
