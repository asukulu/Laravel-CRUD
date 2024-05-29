<?php

namespace App\Models;
use App\Models\Booking;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable =[
        'amount',
        'payed_at',
        'transaction_id',
    ];

    protected $dates = [
        'payed_at',
    ];

    public function transaction()
    {
        //this relationship is one to one booking(order) to payment
        return $this->belongsTo(Transaction::class);
    }
}