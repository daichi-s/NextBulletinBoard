<?php

use Illuminate\Database\Seeder;

class CreateTestUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'     => 'testUser1',
                'email'    => Str::random(10).'@exsample.com',
                'password' => Hash::make('password'),
            ],
            [
                'name'     => 'testUser2',
                'email'    => Str::random(10).'@exsample.com',
                'password' => Hash::make('password'),
            ]
        ]);
    }
}
