<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    /**
     * @var mixed
     */
    public function records()
    {
        return $this->hasMany(Record::class);
    }
}
