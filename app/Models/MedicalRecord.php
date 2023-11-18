<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalRecord extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function personnel()
    {
        return $this->belongsTo(PersonnelInfo::class, 'service_number', 'service_number');
    }
}
