<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Locations_India_countries extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([

            array (
                'id' => 101,
                'name' => 'India',
                'iso3' => 'IND',
                'iso2' => 'IN',
                'phonecode' => '91',
                'capital' => 'New Delhi',
                'currency' => 'INR',
                'currency_symbol' => '₹',
                'tld' => '.in',
                'native' => 'भारत',
                'region' => 'Asia',
                'subregion' => 'Southern Asia',
                'timezones' => '[{"zoneName":"Asia\\/Kolkata","gmtOffset":19800,"gmtOffsetName":"UTC+05:30","abbreviation":"IST","tzName":"Indian Standard Time"}]',
                'translations' => '{"br":"Índia","pt":"Índia","nl":"India","hr":"Indija","fa":"هند","de":"Indien","es":"India","fr":"Inde","ja":"インド","it":"India"}',
                'latitude' => '20.00000000',
                'longitude' => '77.00000000',
                'emoji' => '🇮🇳',
                'emojiU' => 'U+1F1EE U+1F1F3',
                'created_at' => '2018-07-20 20:11:03',
                'updated_at' => '2021-02-20 14:24:49',
                'flag' => 1,
                'wikiDataId' => 'Q668',
            )
        ]);
    }
}
