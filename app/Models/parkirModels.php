<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parkirModels extends Model
{
    use HasFactory;
    protected $table = 'parkir';
    protected $guarded = [];
}