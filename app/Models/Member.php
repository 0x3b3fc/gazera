<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'members';
    protected $fillable = [
        'name','username','address','membership_type','user_category','membership_status',
        'national_id','city','qualification','job','social_status','nationality',
        'birthday','place_of_birth','gender','religion','photo_id','national_photo',
    ];
}
