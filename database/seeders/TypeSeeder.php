<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

     public function getCSVData(string $path) {
        $data = [];

        // $path = __DIR__ + items.csv

        $file_stream = fopen($path, 'r');

        if ($file_stream === false) {
            exit('fail' . $path);
        }

        while (($row = fgetcsv($file_stream)) !== false) {
            $data[] = $row;
        }

        fclose($file_stream);

        return $data;
    }

    public function run(): void
    {

        $data = $this->getCSVData(__DIR__.'/types.csv');

        foreach($data as $index=>$row){
            if($index !== 0){

                $new_type = new Type();
                $new_type->name = $row[0];
                $new_type->description = $row[1];
                $new_type->save();
            }
        }
       
    }
}
