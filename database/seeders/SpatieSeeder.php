<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class SpatieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create permissions
        // Permission::create(['name' => 'view posts']);
        // Permission::create(['name' => 'create posts']);
        // Permission::create(['name' => 'edit posts']);
        // Permission::create(['name' => 'delete posts']);
        // Permission::create(['name' => 'publish posts']);
        // Permission::create(['name' => 'unpublish posts']);

        //create roles and assign existing permissions
        $userRole = Role::create(['name' => 'user']);
        // $writerRole->givePermissionTo('view posts');
        // $writerRole->givePermissionTo('create posts');
        // $writerRole->givePermissionTo('edit posts');
        // $writerRole->givePermissionTo('delete posts');

        $adminRole = Role::create(['name' => 'admin']);
        // $adminRole->givePermissionTo('view posts');
        // $adminRole->givePermissionTo('create posts');
        // $adminRole->givePermissionTo('edit posts');
        // $adminRole->givePermissionTo('delete posts');
        // $adminRole->givePermissionTo('publish posts');
        // $adminRole->givePermissionTo('unpublish posts');

        $superadminRole = Role::create(['name' => 'superadmin']);
        // gets all permissions via Gate::before rule

        // create demo users
        $user = User::factory()->create([
            'name' => 'User',
            'email' => 'user@kvi.com',
            'password' => bcrypt('12345678')
        ]);
        $user->assignRole($userRole);

        $user = User::factory()->create([
            'name' => 'Administrator',
            'email' => 'admin@kvi.com',
            'password' => bcrypt('12345678')
        ]);
        $user->assignRole($adminRole);

        $user = User::factory()->create([
            'name' => 'Superadmin',
            'email' => 'superadmin@kvi.com',
            'password' => bcrypt('12345678')
        ]);
        $user->assignRole($superadminRole);
    }
}
