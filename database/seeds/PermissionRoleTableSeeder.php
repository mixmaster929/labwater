<?php

use App\Permission;
use App\Role;
use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{
    public function run()
    {
        $admin_permissions = Permission::take(21)->get();
        Role::findOrFail(1)->permissions()->sync($admin_permissions->pluck('id'));
        $user_permissions = $admin_permissions->filter(function ($permission) {
            return substr($permission->title, 0, 5) != 'user_' && substr($permission->title, 0, 5) != 'role_' && substr($permission->title, 0, 11) != 'permission_';
        });
        $company_permissions = Permission::find(22);
        Role::findOrFail(2)->permissions()->sync($company_permissions);

        $employee_access = Permission::find(23);
        Role::findOrFail(3)->permissions()->sync($employee_access);
    }
}
