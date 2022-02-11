<?php

namespace Database\Seeders;

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
        $db = 'zipcodes_distance';
        $table = 'zipcodes';
        $file = public_path("/seeders/$db"."_"."$table".".csv");

        // import CSV function
        function import_CSV($filename, $delimiter = ","): bool|array
        {
            if (!file_exists($filename) || !is_readable($filename)) {
                return false;
            }
            $header = null;
            $data = [];
            if (($handle = fopen($filename, "r")) !== false) {
                while (($row = fgetcsv($handle, 1000, $delimiter)) !== false) {
                    if (!$header) {
                        $header = $row;
                    } else {
                        $data[] = array_combine($header, $row);
                    }
                }
                fclose($handle);
            }
            return $data;
        }

        // store returned data into array of records
        $records = import_CSV($file);

        // add each record to the posts table in DB
        foreach ($records as $key => $record) {
            Zipcode::create([
                'zip' => $record['zip'],
                'latitude' => $record['latitude'],
                'longitude' => $record['longitude']
            ]);
        }
    }
}
