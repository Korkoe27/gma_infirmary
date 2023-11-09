<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use PhpParser\Node\Stmt\Return_;

class personnel_info extends Model
{
    use HasFactory;

    protected $table = 'personnel_data';

    protected $fillable = [
        'service_number',
        'rank',
        'surname',
        'first_name',
        'other_name',
        'gender',
        'date_of_birth',
        'platoon',
        'company',
        'intake',
        'cadet_image'
    ];


    // public function medicalRecords() {
    //     return $this->hasOne(medical_records::class);
    // }

    public function medical() {
        return $this->belongsTo(medical_records::class);
    }
}
