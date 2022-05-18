<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Affiliate;
use App\Models\Office;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class Populate extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reads the JSON-encoded affiliates.txt file
        $filename= __DIR__.'/affiliates.txt';
        $file = fopen($filename,'r');
        // Creates a json object for each line
        while (!feof($file)){
            $line = fgets($file);
            $obj = json_decode($line);
            // Creates or updates  an entry on the Addresses table with the information read from the file
            $address = Address::query() -> updateOrCreate([
                'latitude' => $obj->latitude,
                'longitude'=> $obj->longitude,
            ]);
            // Creates or updates  an entry on the Affiliates table with the information read from the file
            Affiliate::query() -> updateOrCreate([
                'affiliate_id' => $obj->affiliate_id,
                'name'=> $obj->name,
                'address_id' => $address['id'],
            ]);
        }

        // Populating Dublin Office:
        $dublin_office_address = Address::query() -> updateOrCreate([
            'latitude' => '53.3340285',
            'longitude'=> '-6.2535495',
        ]);

        Office::query() -> updateOrCreate([
            'office_name' => 'Dublin Office',
            'address_id' => $dublin_office_address['id'],
        ]);

        // Populating Fake Office:
        $fake_office_address = Address::query() -> updateOrCreate([
            'latitude' => '54.0013118',
            'longitude' => '-6.3885498',
        ]);

        Office::query() -> updateOrCreate([
            'office_name' => 'Fake Office',
            'address_id' => $fake_office_address['id'],
        ]);

    }
}
