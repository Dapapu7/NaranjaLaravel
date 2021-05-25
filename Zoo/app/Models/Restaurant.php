<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'phone_number', 'address', 'url', 'description', 'photo', 'workers_id'];

    public function clients() {
        return $this->belongsToMany(Client::class);
    }

    public function workers() {
        return $this->hasMany(Worker::class);
    }
}
