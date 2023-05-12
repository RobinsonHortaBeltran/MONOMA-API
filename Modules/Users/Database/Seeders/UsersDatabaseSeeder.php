<?php

namespace Modules\Users\Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class UsersDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $users = [
            [
                'username'          => 'tester',
                'password'          => '123456',
                'last_login'        => Carbon::now(),
                'role'              => 'agent',
                'active'            => true,
            ],
            [
                'username'          => 'manager',
                'password'          => '789897',
                'last_login'        => Carbon::now(),
                'role'              => 'manager',
                'active'            => true,
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
