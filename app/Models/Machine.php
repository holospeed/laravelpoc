<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'model', 'business_id'];

    public function business()
    {
        return $this->belongsTo(Business::class);
    }
}
