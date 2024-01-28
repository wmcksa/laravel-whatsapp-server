<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cms_users extends Model
{
    use HasFactory;

    protected $table = 'cms_users';


    protected $fillable = [
        'id_users','name','email','password','id_cms_privileges',

    ];
}
