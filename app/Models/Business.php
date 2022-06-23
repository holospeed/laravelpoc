<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function machines()
    {

        return $this->hasMany(Machine::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
