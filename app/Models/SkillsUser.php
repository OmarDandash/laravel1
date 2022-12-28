<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillsUser extends Model
{
    use HasFactory;
    protected $table='SkillsUsers';
protected $fillable=[
'technologies',
'aria_valuemin',
];

    public function profile3(){
        return $this->belongsTo(User::class,'user_id');
    }

}
