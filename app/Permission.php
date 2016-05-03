<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public function roles()
    {
        return $this->BelongsToMany(Role::class);
    }

    public function givePermissionTo(Permission $permission)
    {
         return $this->permissions()->save($permission);

    }

}


