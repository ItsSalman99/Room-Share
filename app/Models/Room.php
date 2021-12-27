<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_name',
        'home_type',
        'img',
        'total_occupancy',
        'total_bedrooms',
        'total_bathrooms',
        'summary',
        'description',
        'address',
        'has_tv',
        'has_kitchen',
        'has_air_con',
        'has_heating',
        'has_internet',
        'price',
        'owner_id',
        'created_at',
        'updated_at'
    ];

    /**
     * Get the user associated with the Room
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id', 'id');
    }

}
