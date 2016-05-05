<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    // A role may be given many permissions.
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    // Helper method to grant the given permission to a role.
    public function givePermissionTo(Permission $permission)
    {
        return $this->permissions()->save($permission);
    }
}