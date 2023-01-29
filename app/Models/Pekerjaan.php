<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $keyType = 'string';
    protected $table = 'pekerjaan';
    protected $guarded = [];
}
