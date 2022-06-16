<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\student;

class department extends Model
{
    use HasFactory;
    protected $table = 'department';
    protected $primaryKey = 'department_id';
    public $incrementing = true;
    public $timeStamp = false;
    function students(){
        
        return $this->hasMany(student::class, 'department_id', 'department_id');
    }
}
