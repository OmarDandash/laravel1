<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Technology;
use App\Models\url;
class Course extends Model
{
    use HasFactory;

    protected $fillable=[
        'courseName',
        'courseImage',
        'Technology_id',

    ];
    public function techwen()
    {
        return $this->belongsTo(Technology::class, 'Technology_id');
       
    }
    public function techwen123()
    {
        return $this->belongsTo(course::class, 'Course_id');
       
    }
   
}
