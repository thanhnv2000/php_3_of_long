<?php

use Illuminate\Database\Seeder;
use App\Category;
use Faker\Factory;
class CategorytableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for($i=0; $i < 30; $i++){
            $item = [
                'cate_name' => $faker->name,
                
            ];
        }
    }
}
