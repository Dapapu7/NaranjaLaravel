<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'phone_number', 'dni', 'address', 'num_ss', 'task', 'salary'];

    public function enclosures() {
        return $this->belongsToMany(Enclosure::class);
    }

    public function restaurants() {
        return $this->belongsTo(Restaurant::class);
    }
}
