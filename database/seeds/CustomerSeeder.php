<?php

use App\Models\Backend\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('id_ID');

        for($i=0;$i < 1000; $i++)
        {
            Customer::create([
                'name'=>$faker->name,
                'address'=>$faker->address,
                'email'=>$faker->email,
                'phone_number'=>$faker->phoneNumber,
                'identity_card_photo'=>'-'
            ]);
        }
    }
}
