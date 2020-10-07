<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create roles and assign existing permissions
        // define super admin role and gets all permissions via Gate::before rule; see AuthServiceProvider
        $role1 = Role::create([
            'name'=> 'super-admin',
            'guard_name'=>"web"
        ]);
        $role2 = Role::create([
            'name' => 'kemahasiswaan',
            'guard_name' => "web"
        ]);
        // assign permission to this role
        $role2->givePermissionTo('create data');
        $role2->givePermissionTo('read data');
        $role2->givePermissionTo('update data');
        $role2->givePermissionTo('delete data');

        $role3 = Role::create([
            'name' => 'keuangan',
            'guard_name' => "web"
        ]);
        // assign permission to this role
        $role3->givePermissionTo('create data');
        $role3->givePermissionTo('read data');
        $role3->givePermissionTo('update data');
        $role3->givePermissionTo('delete data');
        
        $role4 = Role::create([
            'name' => 'fakultas',
            'guard_name' => "web"
        ]);
        // assign permission to this role
        $role4->givePermissionTo('create data');
        $role4->givePermissionTo('read data');
        $role4->givePermissionTo('update data');
        $role4->givePermissionTo('delete data');
        
        $role5 = Role::create([
            'name' => 'jurusan',
            'guard_name' => "web"
        ]);
        // assign permission to this role
        $role5->givePermissionTo('create data');
        $role5->givePermissionTo('read data');
        $role5->givePermissionTo('update data');
        $role5->givePermissionTo('delete data');
        
        $role6 = Role::create([
            'name' => 'mahasiswa',
            'guard_name' => "web"
        ]);
        // assign permission to this role
        $role6->givePermissionTo('create data');
        $role6->givePermissionTo('read data');
        $role6->givePermissionTo('update data');
        $role6->givePermissionTo('delete data');

        $role7 = Role::create([
            'name' => 'dosen',
            'guard_name' => "web"
        ]);
        // assign permission to this role
        $role7->givePermissionTo('create data');
        $role7->givePermissionTo('read data');
        $role7->givePermissionTo('update data');
        $role7->givePermissionTo('delete data');
    }
}
