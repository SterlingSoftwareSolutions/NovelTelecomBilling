<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Package;

class PackageOptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Retrieve all packages with their IDs and names from the packages table
        $packages = DB::table('packages')->get(['id', 'package_name']);

        if ($packages->isNotEmpty()) {
            $packageOptions = [];

            // Define package options for each package
            $allPackageOptions = [
                'NOVELTEL INBOUND' => ['1300'],
                'Noveltel 3CX Hosted PBX' => [
                    '3CX License and Hosting-Monthly',
                    '3cx License and Hosting-Annual',
                    '3CX Licence-Annual',
                    '3CX Licence-Annual and Hosting-Monthly',
                    '3CX Licence and Hosting Combined-Monthly',
                    '3CX License Annual-No Charge'
                ],
                'Novel Tel 4G DATA [40GB]' => ['Telstra Mobile Data 40 GB'],
                'Noveltel Telstra Mobile V&D Manual' => ['BURO 4G 1GB V&D MANUAL'],
                'NOVEL TEL NBN DATA' => [
                    'NBN 12/1 Mbps',
                    'NBN 25/5 Mbps',
                    'NBN 50/20 Mbps',
                    'NBN 100/40 Mbps'
                ],
                'NovelTel NBN Data' => [
                    'NBN Bronze',
                    'NBN Silver',
                    'NBN Gold',
                    'NBN Platinum',
                    'NBN 12-Bundle',
                    'NBN 25-Bundle',
                    'NBN 50-Bundle',
                    'NBN 100-Bundle'
                ],
                'Novel Tel SIP Basic' => ['Novel Tel Sip Basic', 'Novel Tel Sip Basic 2nd Number'],
                'Novel Tel SIP Basic Plus' => ['Novel Tel Sip Basic Plus', 'Novel Tel Sip Basic 2nd Number'],
                'Novel Tel SIP Ultimate' => ['Novel Tel SIP Ultimate', 'Novel Tel SIP Ultimate 2nd Number'],
                'Novel NBN Voice Only' => ['NBN Voice Only PAYG', 'NBN Component'],
                'NOVEL TEL FIXED LINE BASIC' => ['PSTN-Business and Fax Access'],
                'NOVEL TEL DSL BASIC PLUS' => [
                    'Z1 BASIC PLUS NO CONTRACT',
                    'Z1 BASIC PLUS 12 MONTH',
                    'Z1 BASIC PLUS 24 MONTH',
                    'Z2/3 BASIC PLUS NO CONTRACT',
                    'Z2/3 BASIC PLUS 12 MONTH',
                    'Z 2/3 BASIC PLUS 24 MONTH'
                ],
                'NovelTel NBN Voice Only-Unlimited' => ['NBN Voice Only-Unlimited', 'NBN Component'],
                'NovelTel NBN Bundle SIP' => ['NBN Bundle SIP'],
                'NOVEL TEL LOCAL FIXED LINE' => ['PSTN-Business and Fax Access'],
                'NOVEL TEL NATIONAL FIXED LINE' => ['PSTN-Business and Fax Access'],
                'NOVEL TEL TOTAL FIXED LINE' => ['PSTN-Business and Fax Access'],
                'NOVEL TEL PLATINUM FIXED LINE' => ['PSTN-Business and Fax Access'],
                'NOVEL TEL FAX DUET' => ['FAX DUET'],
                // Add more package options here if necessary
            ];

            foreach ($packages as $package) {
                if (isset($allPackageOptions[$package->package_name])) {
                    foreach ($allPackageOptions[$package->package_name] as $option) {
                        $packageOptions[] = [
                            'package_id' => $package->id,
                            'package_options' => $option,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ];
                    }
                }
            }

            // Insert data into the package_options table
            DB::table('package_options')->insert($packageOptions);
        }
    }
}
