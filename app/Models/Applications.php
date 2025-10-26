<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Documents;

class Applications extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'name',
        'email',
        'company',
        'phone',
        'status'
    ];

    public function documents()
    {
        return $this->hasMany(Documents::class, 'application_id', 'id');
    }
}