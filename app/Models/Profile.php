<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    
    protected $table = 'profiles';
    protected $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', // Relasi dengan model User
        'phone',
        'occupation',
        'workplace',
        'birthplace',
        'birthdate',
        'bio',
    ];

    /**
     * Get the user that owns the profile.
     */
    public function userModel()
    {
        return $this->belongsTo(User::class);
    }
}
