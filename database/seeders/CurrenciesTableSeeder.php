<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Currency;

class CurrenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ajout de  quelques enregistrements de devise
        $currencyRecords = [
            ['name' => 'USD'],
            ['name' => 'GBP'],
            ['name' => 'EUR'],
            ['name' => 'AUD'],
            ['name' => 'CAD'],
            ['name' => 'CHF'],
            ['name' => 'JPY'],
        ];

        Currency::insert($currencyRecords);
    }
}
