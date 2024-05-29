<?php

namespace App\Models;

use App\Models\Payment;
use App\Models\Events;
use App\Scopes\AvailableScope;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [

        'status',
        'student_id'
    ];

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}
