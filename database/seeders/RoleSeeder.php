<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['name' => 'admin',
                'description'=>'Admin role can do every things on this site'],
            ['name' => 'content_writer',
                'description'=>'Content Writer'],
        ];

        foreach ($roles as $role){
            Role::create($role);
        }
    }
}
