<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';

    public $fillable = [
        'id',
        'transaction_date',
        'description',
        'credit',
        'debit',
        'running_balance'
    ];

    protected $dates = ['transaction_date'];
}
