<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Traits\UUID;

class Utilizador extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use UUID;

   
    protected $fillable = [
        'nome',
        'telefone',
        'password',
    ];

   
    protected $hidden = [
        'password',
        'remember_token',
    ];

    
}
