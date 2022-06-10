<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionOneDistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("question_one_districts")->insert([
            [
                "region_id" => 3,
                "name" => "Balaka",
                "population" => "438379",
                "total_area" => "2142"
            ],
            [
                "region_id" => 3,
                "name" => "Blantyre",
                "population" => "1251484",
                "total_area" => "2025"
            ],
            [
                "region_id" => 3,
                "name" => "Chikwawa",
                "population" => "564684",
                "total_area" => "4878"
            ],
            [
                "region_id" => 3,
                "name" => "Chiradzulu",
                "population" => "356875",
                "total_area" => "761"
            ],
            [
                "region_id" => 1,
                "name" => "Chitipa",
                "population" => "234927",
                "total_area" => "4334"
            ],
            [
                "region_id" => 2,
                "name" => "Dedza",
                "population" => "830512",
                "total_area" => "3754"
            ],
            [
                "region_id" => 2,
                "name" => "Dowa",
                "population" => "772569",
                "total_area" => "3077"
            ],
            [
                "region_id" => 1,
                "name" => "Karonga",
                "population" => "365028",
                "total_area" => "3416"
            ],
            [
                "region_id" => 2,
                "name" => "Kasungu",
                "population" => "842953",
                "total_area" => "8017"
            ],
            [
                "region_id" => 1,
                "name" => "Likoma",
                "population" => "14527",
                "total_area" => "20"
            ],
            [
                "region_id" => 2,
                "name" => "Lilongwe",
                "population" => "2626901",
                "total_area" => "6211"
            ],
            [
                "region_id" => 3,
                "name" => "Machinga",
                "population" => "735438",
                "total_area" => "3582"
            ],
            [
                "region_id" => 3,
                "name" => "Mangochi",
                "population" => "1148611",
                "total_area" => "6729"
            ],
            [
                "region_id" => 2,
                "name" => "Mchinji",
                "population" => "602305",
                "total_area" => "3131"
            ],
            [
                "region_id" => 3,
                "name" => "Mulanje",
                "population" => "684107",
                "total_area" => "2005"
            ],
            [
                "region_id" => 3,
                "name" => "Mwanza",
                "population" => "130949",
                "total_area" => "756"
            ],
            [
                "region_id" => 1,
                "name" => "Mzimba",
                "population" => "1157522",
                "total_area" => "10619"
            ],
            [
                "region_id" => 3,
                "name" => "Neno",
                "population" => "138291",
                "total_area" => "1561"
            ],
            [
                "region_id" => 1,
                "name" => "Nkhata Bay",
                "population" => "285795",
                "total_area" => "4182"
            ],
            [
                "region_id" => 2,
                "name" => "Nkhotakota",
                "population" => "395897",
                "total_area" => "4338"
            ],
            [
                "region_id" => 3,
                "name" => "Nsanje",
                "population" => "299168",
                "total_area" => "1945"
            ],
            [
                "region_id" => 2,
                "name" => "Ntcheu",
                "population" => "659608",
                "total_area" => "3251"
            ],
            [
                "region_id" => 2,
                "name" => "Ntchisi",
                "population" => "317069",
                "total_area" => "1709"
            ],
            [
                "region_id" => 3,
                "name" => "Phalombe",
                "population" => "429450",
                "total_area" => "1323"
            ],
            [
                "region_id" => 1,
                "name" => "Rumphi",
                "population" => "229161",
                "total_area" => "4560"
            ],
            [
                "region_id" => 2,
                "name" => "Salima",
                "population" => "478346",
                "total_area" => "2151"
            ],
            [
                "region_id" => 3,
                "name" => "Thyolo",
                "population" => "721456",
                "total_area" => "1666"
            ],
            [
                "region_id" => 3,
                "name" => "Zomba",
                "population" => "851737",
                "total_area" => "2405"
            ]
        ]);
    }
}
