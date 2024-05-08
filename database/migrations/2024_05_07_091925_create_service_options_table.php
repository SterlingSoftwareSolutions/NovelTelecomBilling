<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Service;

class ServiceOptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Fetch all services from the services table
        $services = Service::all();

        // Define service options data based on services
        $serviceOptions = [];
        foreach ($services as $service) {
            $serviceOptions[] = [
                'service_id' => $service->id,
                'service_names' => 'Type for ' . $service->service_name, // Example service name
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        // Insert data into the service_options table
        DB::table('service_options')->insert($serviceOptions);
    }
}
