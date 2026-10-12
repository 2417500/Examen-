<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Incident extends Model {
    protected $fillable = ['equipment_id', 'user_id', 'description', 'status'];
    public function equipment() { return $this->belongsTo(Equipment::class); }
    public function user() { return $this->belongsTo(User::class); }
}