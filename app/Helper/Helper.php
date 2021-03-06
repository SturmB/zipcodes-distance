<?php

namespace App\Helper;

class Helper
{
    public static function import_CSV($filename, $delimiter = ","): bool|array
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
}
