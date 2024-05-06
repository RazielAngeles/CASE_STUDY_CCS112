<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class carSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("items")->insert([
            [
                'Cars' => 'Toyota Corolla',
                'Price' => '1001730.00',
            ],
            [
                'Cars' => 'Ford F-150',
                'Price' => '1430100.00',
            ],
            [
                'Cars' => 'Toyota Camry',
                'Price' => '1243520.00',
            ],
            [
                'Cars' => 'Honda Accord',
                'Price' => '1304930.00',
            ],
            [
                'Cars' => 'Toyota Vios',
                'Price' => '700000',
            ],
            [
                'Cars' => 'Honda Civic',
                'Price' => '1100000.00',
            ],
            [
                'Cars' => 'Honda Supremo',
                'Price' => '75000.00',
            ],
            [
                'Cars' => 'Nissan Rogue',
                'Price' => '1300270.00',
            ],
            [
                'Cars' => 'Ford Mustang',
                'Price' => '1346200.00',
            ],
            [
                'Cars' => 'Chevrolet Silverado 1500',
                'Price' => '1425000.00',
            ],
        ]);
    }
}
