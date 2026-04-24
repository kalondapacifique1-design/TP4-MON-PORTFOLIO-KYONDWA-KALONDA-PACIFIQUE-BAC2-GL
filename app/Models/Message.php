<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // Si tu utilises la suppression (trash)

class Message extends Model
{
    use SoftDeletes; // Ajoute ceci si tu veux utiliser le trash/forceDelete

    protected $fillable = ['name', 'email', 'message'];
}
