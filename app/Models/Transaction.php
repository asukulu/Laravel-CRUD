<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Payment;
use App\Event;
use App\User;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'student_id',
    ];

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function events()
    {
        return $this->belongsToMany(Event::class, 'transactiontable')->withPivot('quantity');
    }

    public function getTotalAttribute()
    {
        return $this->events()
            ->withoutGlobalScope(AvailableScope::class)
            ->get()
            ->pluck('total')
            ->sum();
    }
}