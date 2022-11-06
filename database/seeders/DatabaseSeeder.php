<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create([
            'name' => 'John Doe'
        ]);

        Post::factory(5)->create([
            'user_id' => $user->id
        ]);

        $use = User::create([
            'name'=>'ur',
            'username'=>'ur',
            'email'=>'ur@mail.com',
            'password'=>\Hash::make('password'),
        ]);

        $role = Role::create([
            'name'=>'Super-Admin',
        ]);
        $use->assignRole($role);
    }

}
