<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = ['user_id', 'property_id','name','description','price_per_night','photo', 'start_date', 'end_date','photo'];
    public function bookings()
{
    return $this->hasMany(Booking::class);
}

}
