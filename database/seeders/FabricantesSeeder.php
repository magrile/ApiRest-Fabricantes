<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class FabricantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {
            DB::table('fabricantes')->insert([
                'marca' => $faker->name(),
                'plantas' => $faker->city(),
                'paisesDistribuidos' => $faker->country(),
                'beneficioBruto' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = 99),
                'beneficoNeto' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = 99),
                'deuda' => $faker->randomFloat($nbMaxDecimals = 3, $min = 0, $max = 99),
                'cif' => $faker->text(9)
            ]);
        }
    }
}