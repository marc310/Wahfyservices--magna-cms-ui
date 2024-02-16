<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

public $timestamps = True;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'passport',
        'phone_number',
        'expiry_date',
        'nationality',
        'birth_date',
        'service_type',
        'service_code',
        'barcode',
        'service_license_no',
        'service_no',
        'servi_ces',
        'service_image',
        'attachment_desc',
        'service_attachment',
        'attachment_descc',
        'status',
        // 'published_at',
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
