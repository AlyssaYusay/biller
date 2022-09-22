<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use Notifiable;
    
    protected $fillable = [
        'customerId',
        'month',
        'year',
        'initial',
        'final',
        'amount',
        'status'
    ];

    public function data()
    {
        return $this->belongsTo(User::class);
    }

    
}
