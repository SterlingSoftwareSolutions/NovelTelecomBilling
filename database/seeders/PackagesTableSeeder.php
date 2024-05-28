<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Service;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Retrieve package IDs from the service_options table
        $packageIds = DB::table('service_options')->pluck('id')->toArray();

        // Ensure that packageIds array is not empty before proceeding
        if (!empty($packageIds)) {
            // Define service options data
            $packages = [];

            // Define package for each service option
            $allpackages = [
                'Optus 1300/1800' => ['Optus 1300/1800 Package', 'aaaa'],
                'Comms Code 1300/1800' => ['Comms Code 1300/1800 Package', 'aassdsdadsa'],
                'AAPT 13/1300' => ['AAPT 13/1300 Package'],
                'AAPT 1800' => ['AAPT 1800 Package'],
                'Synchronous Data' => ['Synchronous Data Package'],
                'LBNNCo Fast Fiber' => ['LBN NCo Fast Fiber Package'],
                'AAPT 5G Fixed Wireless' => ['AAPT 5G Fixed Wireless Package'],
                'Opticomm Fast Fiber' => ['Opticomm Fast Fiber Package'],
                'Fixed Wireless' => ['Fixed Wireless Package'],
                'Telstra DSL' => ['Telstra DSL Package'],
            ];

            $packageKeys = array_keys($allpackages);

            // Loop through the packageIds and assign package options
            foreach ($packageIds as $index => $packageId) {
                if (isset($packageKeys[$index])) {
                    $packageName = $packageKeys[$index];
                    foreach ($allpackages[$packageName] as $package) {
                        $packages[] = [
                            'service_id' => $packageId,
                            'package_name' => $package,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ];
                    }
                }
            }

            // Insert data into the packages table
            DB::table('packages')->insert($packages);
        }
    }
}
