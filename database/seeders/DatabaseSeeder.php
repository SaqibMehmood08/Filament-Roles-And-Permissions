<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

    //    $user= User::factory()->create([
    //         'name' => 'Admin',
    //         'email' => 'admin@gmail.com',
    //         'password' => '12345678',
    //     ]);
    //     $role=Role::create(['name'=>'admin']);
    //     $user->assignRole($role);
        // $bussines_user= User::factory()->create([
        //     'name' => 'bussines_user',
        //     'email' => 'bussiness@gmail.com',
        //     'password' => '12345678',
        // ]);
        // $bussines_userrole=Role::create(['name'=>'bussines_user']);
        // $bussines_user->assignRole($bussines_userrole);
        $bussines_user=User::where('name','bussines_user')->first();
        $bussines_user->assignRole('bussines_user');
    }
}
