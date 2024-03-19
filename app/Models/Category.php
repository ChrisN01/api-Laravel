<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps=false; /* TODO:Para que no traiga fecha de creacion o edicion*/

    protected $fillable = ['id','name','obs'];
}
