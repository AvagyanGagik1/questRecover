<?php

namespace Database\Seeders;

use App\Http\Helpers\UI\Crud\Traits\ImageTrait;
use App\Models\User;
use App\Models\UserAccess;
use Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    use ImageTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'name' => 'Sargis',
            'email' => 'questbehavioralhealth@gmail.com',
            'password' => Hash::make('admin123456'),
            'avatar' => $this->createUserImage('S')
        ];
        $user = User::create($user);
        $user->roles()->attach(1);
        $access = UserAccess::all()->pluck('id');
        foreach ($access as $acc) {
            $user->access()->attach($acc, ['is_access' => true]);
        }
    }
}
