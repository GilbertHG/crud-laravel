<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['nama', 'nim', 'tempat_lahir', 'tanggal_lahir', 'email'];
}
