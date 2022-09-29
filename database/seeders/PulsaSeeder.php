<?php

namespace Database\Seeders;

use App\Models\Pulsa;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PulsaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pulsa::create([
            'pulsa' => '5',
            'harga' => '7.000',
        ]);

        Pulsa::create([
            'pulsa' => '10',
            'harga' => '12.000',
        ]);

        Pulsa::create([
            'pulsa' => '15',
            'harga' => '17.000',
        ]);

        Pulsa::create([
            'pulsa' => '20',
            'harga' => '22.000',
        ]);

        Pulsa::create([
            'pulsa' => '25',
            'harga' => '27.000',
        ]);

        Pulsa::create([
            'pulsa' => '30',
            'harga' => '31.000',
        ]);

        Pulsa::create([
            'pulsa' => '50',
            'harga' => '51.000',
        ]);

        Pulsa::create([
            'pulsa' => '100',
            'harga' => '100.000',
        ]);

        Pulsa::create([
            'pulsa' => '150',
            'harga' => '150.000',
        ]);

        Pulsa::create([
            'pulsa' => '200',
            'harga' => '199.000',
        ]);

        Pulsa::create([
            'pulsa' => '300',
            'harga' => '298.000',
        ]);

        Pulsa::create([
            'pulsa' => '500',
            'harga' => '495.000',
        ]);

        Pulsa::create([
            'pulsa' => '1000',
            'harga' => '990.000',
        ]);
    }
}
