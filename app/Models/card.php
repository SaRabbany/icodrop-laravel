<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class card extends Model
{
    use HasFactory;

    protected $fillable = ['heart'];

    public function screnshots()
    {
        return $this->hasMany(cardHasScrenshoot::class, 'card_id', 'id');
    }
}
