<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

#[Table('majors')]
#[Fillable(['name'])]

class Major extends Model
{
    use HasFactory;
    public function students()
    {
        return $this->hasMany(Student::class, 'major_id', 'id');
    }
}
