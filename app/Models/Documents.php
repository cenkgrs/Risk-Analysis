<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Applications;

class Documents extends Model
{
    use HasFactory;

    protected $fillable = [
        'application_id',
        'name',
        'path',
        'type',
    ];

    public function application()
    {
        return $this->belongsTo(Applications::class, 'id', 'application_id');
    }
}