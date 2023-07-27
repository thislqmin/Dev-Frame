<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = ['doctor_id', 'date', 'time', 'user_id'];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
