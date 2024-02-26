<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Administrateur extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'nom',
        'prenom',
        'MDP',
        'email',
    ];
}

class AdministrateurAuth extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'email', 'password',
    ];
}
