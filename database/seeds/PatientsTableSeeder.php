<?php

use Illuminate\Database\Seeder;

class PatientsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
          DB::table('patients')->delete() ;
        
        $faker = Faker\Factory::create('sr_Latn_RS'); // create a French faker

        $limit = 10000;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('patients')->insert([ //,
                'name' => $faker->name,
                'date_of_birth' => $faker->dateTimeThisDecade,
                'address' => $faker->street,
                'place' => $faker->cityName,
                'phone' => $faker->phoneNumber,
                'profession' => "-" ,
                'blood_type' => "AB",
                'rh' => "+",
                'drug_susceptibility' => "Negira",
                'childbirth' => $faker->numberBetween(0,5),
                'abortion' => $faker->numberBetween(0,3),
                'personal_anament' => "nema",
                'family_anament' => "nema",
                'date_last_period' => $faker->dateTimeThisDecade($startDate = '-3 Month', $endDate = 'now'),
                'user_id' => "1",
                'created_at'=> $faker->datetime,
                'updated_at'=> $faker->datetime,
            ]);
        }
    }

}
