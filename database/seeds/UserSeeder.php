<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Facades\Hash;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for($i=0 ; $i < 5; $i++){
            $item = [
                'name' => $faker->name,
                'email' => $faker->freeEmail,
                'avatar' => 'storage/user100.jpeg',
                'role' => '200',
                'password' => Hash::make('123456')
            ];
            $users = new User();
            $users->fill($item);
            $users->save();
        }
    }
}
