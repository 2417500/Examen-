<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model {
    protected $fillable = ['user_id', 'status', 'requested_date', 'expected_return_date', 'actual_return_date'];
    protected $casts = [
        'requested_date' => 'datetime',
        'expected_return_date' => 'datetime',
        'actual_return_date' => 'datetime',
    ];
    public function user() { return $this->belongsTo(User::class); }
    public function equipment() { return $this->belongsToMany(Equipment::class, 'loan_items'); }
}