<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'phone_number', 'dni', 'address', 'users_id'];

    public function users() {
        return $this->belongsTo(User::class);
    }

    public function paymentData() {
        return $this->hasMany(PaymentData::class);
    }

    public function tickets() {
        return $this->hasMany(Ticket::class);
    }

    public function restaurants() {
        return $this->belongsToMany(Restaurant::class);
    }
}
