<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;
class url extends Model
{
    use HasFactory;
    protected $fillable=[
        'numbersession',
        'url',
        'Course_id',

    ];
    public function techwen123()
    {
        return $this->belongsTo(course::class, 'Course_id');
       
    }
   
}
