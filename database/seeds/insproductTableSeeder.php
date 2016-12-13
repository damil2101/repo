<?php

use Illuminate\Database\Seeder;

class insproductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 20;
        for($i=0;$i<$limit;$i++)
        {
            DB::table('insproducts')->insert(
                [
                    'product'=>$faker->firstName
                ]
            );
        }
    }
}
