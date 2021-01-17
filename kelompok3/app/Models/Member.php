<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'codestudy', 'student_number', 'research_type', 'title', 'first_supervisor'
    , 'second_supervisor', 'Aim', 'background', 'originality', 'schedule', 'method'];
}
