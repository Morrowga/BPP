<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    //
    use Notifiable;
    protected $guard = 'admin';
}
