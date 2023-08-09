<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Background extends Model
{
    use HasFactory;
    protected $table = 'background';
    protected $primarykey = 'id';
    protected $fillable = ['student_id', 'highschool','graduate'];
}
