<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Documents;

class CheckAnalysis extends Model
{
    use HasFactory;

    protected $table = 'check_analysis';

    protected $fillable = [
        'type',
        'name',
        'email',
        'phone',
        'company',
        'document_id',
        'status'
    ];

    public function document()
    {
        return $this->hasOne(Documents::class, 'id', 'document_id');
    }
}