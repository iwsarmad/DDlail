<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerPoint extends Model
{
    use HasFactory;
    protected $fillable=[
          'point_type'
        , 'point_name'
        , 'point_lat'
        , 'point_log'
        , 'point_specialty'
        , 'point_open_time'
        , 'point_close_time'
        , 'point_img'
        , 'point_img_cover'
        , 'point_phone'
        , 'point_address'
    ];
}
