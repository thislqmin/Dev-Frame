<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class UserModel extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'email',
        'password',
        // 'phone',
        // 'occupation',
        // 'workplace',
        // 'birthplace',
        // 'birthdate',
        // 'bio',
    ];
    protected $hidden = ['password', 'remember_token'];
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    // ...
}
