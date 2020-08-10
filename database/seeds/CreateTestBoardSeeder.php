<?php

use Illuminate\Database\Seeder;

class CreateTestBoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('boards')->insert([
            [
                'user_id'    => 1,
                'title'      => 'Title1',
                'body'       => 'test,test,test',
                'status'     => 1,
                'created_at' => '2020-08-10 00:00:00',
                'updated_at' => '2020-08-10 00:00:00'
            ],
            [
                'user_id'    => 1,
                'title'      => 'Title2',
                'body'       => 'test,test,test',
                'status'     => 1,
                'created_at' => '2020-08-10 00:00:00',
                'updated_at' => '2020-08-10 00:00:00'
            ]
        ]);
    }
}
