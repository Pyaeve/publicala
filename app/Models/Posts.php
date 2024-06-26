<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//agregamos soft deleting
use Illuminate\Database\Eloquent\SoftDeletes;


class Posts extends Model
{
    use HasFactory, SoftDeletes;

}
