<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use function Laravel\Prompts\password;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users=[
            ['name'=>'ibrahim',
                'email'=>'ibrahim@ibrahim.com',
            'password'=>'12345678'
            ],
        [ 'name'=>'fares',
            'password'=>'3345678',
        'email'=>'fares@fares.com' ]
        ];
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
