<?php

use Illuminate\Database\Seeder;
use App\Models\User;

use Faker\Factory;

class CreateTestBoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(User $user)
    {
        $faker = Faker\Factory::create('ja_JP');

        $text = $faker->text;
        $text = str_replace("\r", '', $text);
        $text = str_replace("\n", '', $text);
        mb_substr($text, 0, 60);

        $users = $user->get();

        $boardList = [];
        for ($i = 1; $i <= 100; $i++) {
            $boardList[$i] = [
                'user_id' => $users->random()->id,
                'title'   => $faker->title,
                'body'    => $text,
                'status'  => Arr::random([0,1]),
            ];
        }

        DB::table('boards')->insert($boardList);
    }
}
