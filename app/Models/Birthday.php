<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Birthday extends Model
{
    use HasFactory;
    protected $table='birthdays';
    protected $fillable=['name','age','photo','created_at','updated_at'];
}
