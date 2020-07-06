<?php

namespace App\Models\Auth;

use Laratrust\Models\LaratrustPermission;
use Laratrust\Traits\LaratrustPermissionTrait;

class Permission extends LaratrustPermission
{
    use LaratrustPermissionTrait;

    protected $fillable = [
        'name', 'display_name', 'description',
    ];
}
