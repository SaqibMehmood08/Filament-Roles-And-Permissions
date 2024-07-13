<?php
namespace App\Services;

use App\Models\Role;
use App\Models\User;

class RoleService
{
    public function getAllRoles()
    {
        return [1,2,3,4];
    }
    public function createUser(array $data)
    {
       dd($data);
       return ;
        return User::create($data);
    }

}
