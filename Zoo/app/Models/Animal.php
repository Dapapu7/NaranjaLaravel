<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'gender', 'family', 'description', 'photo', 'enclosures_id'];

    public function enclosures() {
        return $this->belongsTo(Enclosure::class);
    }
}
