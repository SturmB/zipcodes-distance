<?php

namespace Database\Seeders;

use App\Helper\Helper;
use App\Models\Zipcode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ZipcodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // declaring and defining table name and path to csv
        $db = "zipcodes_distance";
        $table = "zipcodes";
        $file = public_path("/seeders/$db" . "_" . "$table" . ".csv");

        // store returned data into array of records
        if (($records = Helper::import_CSV($file)) === false) {
            return;
        }

        // add each record to the posts table in DB
        foreach ($records as $key => $record) {
            Zipcode::create([
                "zip" => $record["zip"],
                "latitude" => $record["latitude"],
                "longitude" => $record["longitude"],
            ]);
        }
    }
}
