<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Namozag extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $table = 'namozag_amal';
    protected $fillable = [
        'landing_h',
        'landing_p',
        'price',
        'step_one',
        'step_two',
        'step_three',
        'step_four',
        'step_five',
        'step_six',
        'step_seven',
        'step_eight',
        'step_nine',
        'step_ten',
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
