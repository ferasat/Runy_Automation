<?php

namespace Rp\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;

    protected $fillable =[
        'name' , 'description' , 'user_id'
    ];
}
