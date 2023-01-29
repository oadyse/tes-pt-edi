<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $keyType = 'string';
    protected $table = 'biodata';
    protected $guarded = [];

    public function pendidikan()
    {
        return $this->belongsTo(Pendidikan::class, 'id', 'id_biodata');
    }
    public function pelatihan()
    {
        return $this->belongsTo(Pelatihan::class, 'id', 'id_biodata');
    }
    public function pekerjaan()
    {
        return $this->belongsTo(Pekerjaan::class, 'id', 'id_biodata');
    }
}
