<?php

namespace App\Models\Auth;

use Laratrust\Models\LaratrustRole;
use Laratrust\Traits\LaratrustRoleTrait;

class Role extends LaratrustRole
{
    use LaratrustRoleTrait;
    
    protected $fillable = [
        'name', 'display_name', 'description',
    ];
}
