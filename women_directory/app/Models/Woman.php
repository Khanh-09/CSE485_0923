<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Woman extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'biography', 'field_of_work', 'image', 'birth_date'];
}
