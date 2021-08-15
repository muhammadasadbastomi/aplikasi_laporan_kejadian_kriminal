<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Contracts\Auth\Authenticatable;

class User extends \Eloquent implements Authenticatable
{
    use AuthenticableTrait;

    protected $guarded = [''];
}
