<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PublishersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('ja_JP');
        for ($i = 0; $i < 10; $i++) {
            $publisher = [
                'name'  => $faker->company . '出版社',
                'address' => $faker->address,
                'created_at' => now(),
                'updated_at' => now(),
            ];
            \Illuminate\Support\Facades\DB::table('publishers')->insert($publisher);
        }

    }
}
