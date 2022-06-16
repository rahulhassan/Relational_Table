<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\department;

class student extends Model
{
    use HasFactory;
    protected $table = 'student';
    protected $primaryKey = 's_id';
    public $incrementing = true;
    public $timeStamp = false;
    function department(){
        
        return $this->belongsTo(department::class, 'department_id', 'department_id');
    }
}
