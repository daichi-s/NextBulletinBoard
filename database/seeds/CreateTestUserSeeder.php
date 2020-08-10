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
        for ($i = 1; $i <= 10; $i++) {
            DB::table('users')->insert([
                [
                    'name'     => "testUser{$i}",
                    'email'    => "email-test{$i}@exsample.com",
                    'password' => Hash::make('password'),
                ],
            ]);
        }
    }
}
