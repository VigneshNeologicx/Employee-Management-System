<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Locations_India_states extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([

            [
                'id' => 4006,
                'name' => 'Meghalaya',
                'country_id' => 101,
                'country_code' => 'IN',
                'fips_code' => '18',
                'iso2' => 'ML',
                'latitude' => '25.46703080',
                'longitude' => '91.36621600',
                'created_at' => '2019-10-05 17:48:57',
                'updated_at' => '2020-12-21 15:50:22',
                'flag' => 1,
                'wikiDataId' => 'Q1195',
            ],

            [
                'id' => 4007,
                'name' => 'Haryana',
                'country_id' => 101,
                'country_code' => 'IN',
                'fips_code' => '10',
                'iso2' => 'HR',
                'latitude' => '29.05877570',
                'longitude' => '76.08560100',
                'created_at' => '2019-10-05 17:48:57',
                'updated_at' => '2020-12-21 15:50:22',
                'flag' => 1,
                'wikiDataId' => 'Q1174',
            ],

            [
                'id' => 4008,
                'name' => 'Maharashtra',
                'country_id' => 101,
                'country_code' => 'IN',
                'fips_code' => '16',
                'iso2' => 'MH',
                'latitude' => '19.75147980',
                'longitude' => '75.71388840',
                'created_at' => '2019-10-05 17:48:57',
                'updated_at' => '2020-12-21 15:50:22',
                'flag' => 1,
                'wikiDataId' => 'Q1191',
            ],

            [
                'id' => 4009,
                'name' => 'Goa',
                'country_id' => 101,
                'country_code' => 'IN',
                'fips_code' => '33',
                'iso2' => 'GA',
                'latitude' => '15.29932650',
                'longitude' => '74.12399600',
                'created_at' => '2019-10-05 17:48:57',
                'updated_at' => '2020-12-21 15:50:22',
                'flag' => 1,
                'wikiDataId' => 'Q1171',
            ],

            [
                'id' => 4010,
                'name' => 'Manipur',
                'country_id' => 101,
                'country_code' => 'IN',
                'fips_code' => '17',
                'iso2' => 'MN',
                'latitude' => '24.66371730',
                'longitude' => '93.90626880',
                'created_at' => '2019-10-05 17:48:57',
                'updated_at' => '2020-12-21 15:50:22',
                'flag' => 1,
                'wikiDataId' => 'Q1193',
            ],

            [
                'id' => 4011,
                'name' => 'Puducherry',
                'country_id' => 101,
                'country_code' => 'IN',
                'fips_code' => '22',
                'iso2' => 'PY',
                'latitude' => '11.94159150',
                'longitude' => '79.80831330',
                'created_at' => '2019-10-05 17:48:57',
                'updated_at' => '2020-12-21 15:50:22',
                'flag' => 1,
                'wikiDataId' => 'Q66743',
            ],

            [
                'id' => 4012,
                'name' => 'Telangana',
                'country_id' => 101,
                'country_code' => 'IN',
                'fips_code' => '40',
                'iso2' => 'TG',
                'latitude' => '18.11243720',
                'longitude' => '79.01929970',
                'created_at' => '2019-10-05 17:48:57',
                'updated_at' => '2020-12-21 15:50:22',
                'flag' => 1,
                'wikiDataId' => 'Q677037',
            ],

            [
                'id' => 4013,
                'name' => 'Odisha',
                'country_id' => 101,
                'country_code' => 'IN',
                'fips_code' => '21',
                'iso2' => 'OR',
                'latitude' => '20.95166580',
                'longitude' => '85.09852360',
                'created_at' => '2019-10-05 17:48:57',
                'updated_at' => '2020-12-21 15:50:22',
                'flag' => 1,
                'wikiDataId' => 'Q22048',
            ],

            [
                'id' => 4014,
                'name' => 'Rajasthan',
                'country_id' => 101,
                'country_code' => 'IN',
                'fips_code' => '24',
                'iso2' => 'RJ',
                'latitude' => '27.02380360',
                'longitude' => '74.21793260',
                'created_at' => '2019-10-05 17:48:57',
                'updated_at' => '2020-12-21 15:50:22',
                'flag' => 1,
                'wikiDataId' => 'Q1437',
            ],

            [
                'id' => 4015,
                'name' => 'Punjab',
                'country_id' => 101,
                'country_code' => 'IN',
                'fips_code' => '23',
                'iso2' => 'PB',
                'latitude' => NULL,
                'longitude' => NULL,
                'created_at' => '2019-10-05 17:48:57',
                'updated_at' => '2019-10-05 17:48:57',
                'flag' => 1,
                'wikiDataId' => 'Q22424',
            ],

            [
                'id' => 4016,
                'name' => 'Uttarakhand',
                'country_id' => 101,
                'country_code' => 'IN',
                'fips_code' => '39',
                'iso2' => 'UT',
                'latitude' => '30.06675300',
                'longitude' => '79.01929970',
                'created_at' => '2019-10-05 17:48:57',
                'updated_at' => '2020-12-21 15:50:22',
                'flag' => 1,
                'wikiDataId' => 'Q1499',
            ],

            [
                'id' => 4017,
                'name' => 'Andhra Pradesh',
                'country_id' => 101,
                'country_code' => 'IN',
                'fips_code' => '02',
                'iso2' => 'AP',
                'latitude' => '15.91289980',
                'longitude' => '79.73998750',
                'created_at' => '2019-10-05 17:48:57',
                'updated_at' => '2020-12-21 15:50:22',
                'flag' => 1,
                'wikiDataId' => 'Q1159',
            ],

            [
                'id' => 4018,
                'name' => 'Nagaland',
                'country_id' => 101,
                'country_code' => 'IN',
                'fips_code' => '20',
                'iso2' => 'NL',
                'latitude' => '26.15843540',
                'longitude' => '94.56244260',
                'created_at' => '2019-10-05 17:48:57',
                'updated_at' => '2020-12-21 15:50:22',
                'flag' => 1,
                'wikiDataId' => 'Q1599',
            ],

            [
                'id' => 4019,
                'name' => 'Lakshadweep',
                'country_id' => 101,
                'country_code' => 'IN',
                'fips_code' => '14',
                'iso2' => 'LD',
                'latitude' => '10.32802650',
                'longitude' => '72.78463360',
                'created_at' => '2019-10-05 17:48:57',
                'updated_at' => '2020-12-21 15:50:22',
                'flag' => 1,
                'wikiDataId' => 'Q26927',
            ],

            [
                'id' => 4020,
                'name' => 'Himachal Pradesh',
                'country_id' => 101,
                'country_code' => 'IN',
                'fips_code' => '11',
                'iso2' => 'HP',
                'latitude' => '31.10482940',
                'longitude' => '77.17339010',
                'created_at' => '2019-10-05 17:48:57',
                'updated_at' => '2020-12-21 15:50:22',
                'flag' => 1,
                'wikiDataId' => 'Q1177',
            ],

            [
                'id' => 4021,
                'name' => 'Delhi',
                'country_id' => 101,
                'country_code' => 'IN',
                'fips_code' => '07',
                'iso2' => 'DL',
                'latitude' => '28.70405920',
                'longitude' => '77.10249020',
                'created_at' => '2019-10-05 17:48:57',
                'updated_at' => '2020-12-21 15:50:22',
                'flag' => 1,
                'wikiDataId' => 'Q1353',
            ],

            [
                'id' => 4022,
                'name' => 'Uttar Pradesh',
                'country_id' => 101,
                'country_code' => 'IN',
                'fips_code' => '36',
                'iso2' => 'UP',
                'latitude' => '26.84670880',
                'longitude' => '80.94615920',
                'created_at' => '2019-10-05 17:48:57',
                'updated_at' => '2020-12-21 15:50:22',
                'flag' => 1,
                'wikiDataId' => 'Q1498',
            ],

            [
                'id' => 4023,
                'name' => 'Andaman and Nicobar Islands',
                'country_id' => 101,
                'country_code' => 'IN',
                'fips_code' => '01',
                'iso2' => 'AN',
                'latitude' => '11.74008670',
                'longitude' => '92.65864010',
                'created_at' => '2019-10-05 17:48:57',
                'updated_at' => '2020-12-21 15:50:22',
                'flag' => 1,
                'wikiDataId' => 'Q40888',
            ],

            [
                'id' => 4024,
                'name' => 'Arunachal Pradesh',
                'country_id' => 101,
                'country_code' => 'IN',
                'fips_code' => '30',
                'iso2' => 'AR',
                'latitude' => '28.21799940',
                'longitude' => '94.72775280',
                'created_at' => '2019-10-05 17:48:57',
                'updated_at' => '2020-12-21 15:50:22',
                'flag' => 1,
                'wikiDataId' => 'Q1162',
            ],

            [
                'id' => 4025,
                'name' => 'Jharkhand',
                'country_id' => 101,
                'country_code' => 'IN',
                'fips_code' => '38',
                'iso2' => 'JH',
                'latitude' => '23.61018080',
                'longitude' => '85.27993540',
                'created_at' => '2019-10-05 17:48:57',
                'updated_at' => '2020-12-21 15:50:22',
                'flag' => 1,
                'wikiDataId' => 'Q1184',
            ],

            [
                'id' => 4026,
                'name' => 'Karnataka',
                'country_id' => 101,
                'country_code' => 'IN',
                'fips_code' => '19',
                'iso2' => 'KA',
                'latitude' => '15.31727750',
                'longitude' => '75.71388840',
                'created_at' => '2019-10-05 17:48:57',
                'updated_at' => '2020-12-21 15:50:22',
                'flag' => 1,
                'wikiDataId' => 'Q1185',
            ],

            [
                'id' => 4027,
                'name' => 'Assam',
                'country_id' => 101,
                'country_code' => 'IN',
                'fips_code' => '03',
                'iso2' => 'AS',
                'latitude' => '26.20060430',
                'longitude' => '92.93757390',
                'created_at' => '2019-10-05 17:48:57',
                'updated_at' => '2020-12-21 15:50:22',
                'flag' => 1,
                'wikiDataId' => 'Q1164',
            ],

            [
                'id' => 4028,
                'name' => 'Kerala',
                'country_id' => 101,
                'country_code' => 'IN',
                'fips_code' => '13',
                'iso2' => 'KL',
                'latitude' => '10.85051590',
                'longitude' => '76.27108330',
                'created_at' => '2019-10-05 17:48:57',
                'updated_at' => '2020-12-21 15:50:22',
                'flag' => 1,
                'wikiDataId' => 'Q1186',
            ],

            [
                'id' => 4029,
                'name' => 'Jammu and Kashmir',
                'country_id' => 101,
                'country_code' => 'IN',
                'fips_code' => '12',
                'iso2' => 'JK',
                'latitude' => '33.27783900',
                'longitude' => '75.34121790',
                'created_at' => '2019-10-05 17:48:57',
                'updated_at' => '2020-12-21 15:50:22',
                'flag' => 1,
                'wikiDataId' => 'Q1180',
            ],

            [
                'id' => 4030,
                'name' => 'Gujarat',
                'country_id' => 101,
                'country_code' => 'IN',
                'fips_code' => '09',
                'iso2' => 'GJ',
                'latitude' => '22.25865200',
                'longitude' => '71.19238050',
                'created_at' => '2019-10-05 17:48:57',
                'updated_at' => '2020-12-21 15:50:22',
                'flag' => 1,
                'wikiDataId' => 'Q1061',
            ],

            [
                'id' => 4031,
                'name' => 'Chandigarh',
                'country_id' => 101,
                'country_code' => 'IN',
                'fips_code' => '05',
                'iso2' => 'CH',
                'latitude' => '30.73331480',
                'longitude' => '76.77941790',
                'created_at' => '2019-10-05 17:48:57',
                'updated_at' => '2020-12-21 15:50:22',
                'flag' => 1,
                'wikiDataId' => 'Q43433',
            ],

            [
                'id' => 4032,
                'name' => 'Dadra and Nagar Haveli',
                'country_id' => 101,
                'country_code' => 'IN',
                'fips_code' => '06',
                'iso2' => 'DN',
                'latitude' => '20.32287780',
                'longitude' => '72.96672540',
                'created_at' => '2019-10-05 17:48:57',
                'updated_at' => '2020-12-21 15:50:22',
                'flag' => 1,
                'wikiDataId' => 'Q46107',
            ],

            [
                'id' => 4033,
                'name' => 'Daman and Diu',
                'country_id' => 101,
                'country_code' => 'IN',
                'fips_code' => '32',
                'iso2' => 'DD',
                'latitude' => '20.39737360',
                'longitude' => '72.83279910',
                'created_at' => '2019-10-05 17:48:57',
                'updated_at' => '2020-12-21 15:50:22',
                'flag' => 1,
                'wikiDataId' => 'Q66710',
            ],

            [
                'id' => 4034,
                'name' => 'Sikkim',
                'country_id' => 101,
                'country_code' => 'IN',
                'fips_code' => '29',
                'iso2' => 'SK',
                'latitude' => '27.53297180',
                'longitude' => '88.51221780',
                'created_at' => '2019-10-05 17:48:57',
                'updated_at' => '2020-12-21 15:50:22',
                'flag' => 1,
                'wikiDataId' => 'Q1505',
            ],

            [
                'id' => 4035,
                'name' => 'Tamil Nadu',
                'country_id' => 101,
                'country_code' => 'IN',
                'fips_code' => '25',
                'iso2' => 'TN',
                'latitude' => '11.12712250',
                'longitude' => '78.65689420',
                'created_at' => '2019-10-05 17:48:57',
                'updated_at' => '2020-12-21 15:50:22',
                'flag' => 1,
                'wikiDataId' => 'Q1445',
            ],

            [
                'id' => 4036,
                'name' => 'Mizoram',
                'country_id' => 101,
                'country_code' => 'IN',
                'fips_code' => '31',
                'iso2' => 'MZ',
                'latitude' => '23.16454300',
                'longitude' => '92.93757390',
                'created_at' => '2019-10-05 17:48:57',
                'updated_at' => '2020-12-21 15:50:22',
                'flag' => 1,
                'wikiDataId' => 'Q1502',
            ],

            [
                'id' => 4037,
                'name' => 'Bihar',
                'country_id' => 101,
                'country_code' => 'IN',
                'fips_code' => '34',
                'iso2' => 'BR',
                'latitude' => '25.09607420',
                'longitude' => '85.31311940',
                'created_at' => '2019-10-05 17:48:57',
                'updated_at' => '2020-12-21 15:50:22',
                'flag' => 1,
                'wikiDataId' => 'Q1165',
            ],

            [
                'id' => 4038,
                'name' => 'Tripura',
                'country_id' => 101,
                'country_code' => 'IN',
                'fips_code' => '26',
                'iso2' => 'TR',
                'latitude' => '23.94084820',
                'longitude' => '91.98815270',
                'created_at' => '2019-10-05 17:48:57',
                'updated_at' => '2020-12-21 15:50:22',
                'flag' => 1,
                'wikiDataId' => 'Q1363',
            ],

            [
                'id' => 4039,
                'name' => 'Madhya Pradesh',
                'country_id' => 101,
                'country_code' => 'IN',
                'fips_code' => '35',
                'iso2' => 'MP',
                'latitude' => '22.97342290',
                'longitude' => '78.65689420',
                'created_at' => '2019-10-05 17:48:57',
                'updated_at' => '2020-12-21 15:50:22',
                'flag' => 1,
                'wikiDataId' => 'Q1188',
            ],

            [
                'id' => 4040,
                'name' => 'Chhattisgarh',
                'country_id' => 101,
                'country_code' => 'IN',
                'fips_code' => '37',
                'iso2' => 'CT',
                'latitude' => '21.27865670',
                'longitude' => '81.86614420',
                'created_at' => '2019-10-05 17:48:57',
                'updated_at' => '2020-12-21 15:50:22',
                'flag' => 1,
                'wikiDataId' => 'Q1168',
            ],

            [
                'id' => 4852,
                'name' => 'Ladakh',
                'country_id' => 101,
                'country_code' => 'IN',
                'fips_code' => NULL,
                'iso2' => 'LA',
                'latitude' => '34.22684750',
                'longitude' => '77.56194190',
                'created_at' => '2019-10-05 17:48:57',
                'updated_at' => '2020-12-21 15:50:22',
                'flag' => 1,
                'wikiDataId' => 'MANUAL',
            ],

            [
                'id' => 4853,
                'name' => 'West Bengal',
                'country_id' => 101,
                'country_code' => 'IN',
                'fips_code' => '28',
                'iso2' => 'WB',
                'latitude' => '22.98675690',
                'longitude' => '87.85497550',
                'created_at' => '2019-10-05 17:48:57',
                'updated_at' => '2020-12-21 15:50:22',
                'flag' => 1,
                'wikiDataId' => 'Q1356',
            ],
        ]);
    }
}
