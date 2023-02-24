<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Field;
class Form extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'is_active',
    ];

    public function fields()
    {
        return $this->hasMany(Field::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}

