<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TravelAgent extends Model
{
    /**
     * @var string
     */
    protected $table = 'travel_agent';

    /**
     * @var array
     */
    protected $fillable = [
        'id_travel_agent', 'nama_travel','gambar'
    ];
}