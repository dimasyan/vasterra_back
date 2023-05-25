<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'surname', 'email', 'date', 'type', 'user_id'];

    public static $rules = [
        'name' => 'required|string',
        'surname' => 'required|string',
        'email' => 'required|string',
        'type' => 'required|string|in:attorney,heritage,info',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
