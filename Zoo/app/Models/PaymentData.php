<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentData extends Model
{
    use HasFactory;
    protected $fillable = ['credit_card', 'expiration_date', 'secret_number', 'payment_method', 'clients_id'];

    public function clients() {
        return $this->belongsTo(Client::class);
    }
}
