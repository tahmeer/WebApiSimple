<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Register extends Model
{
    use HasApiTokens;
    protected $fillable =['Name','Email','Password'];
}
