<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonnelInfo extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function record()
    {
        return $this->hasOne(MedicalRecord::class, 'service_number', 'service_number');
    }
}
