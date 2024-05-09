<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\PackageOption;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    
    // public function package_index(){
       
    //     $packages=Package::all();
    //     $packageoptions=PackageOption::all();
    //     return view('Service.modal',compact('packages','packageoptions'));
        
    // }
    public function getPackages()
    { 
        // dd("fuck you");
        // $packages = Package::all();

        // return response()->json($packages);
        try {
            // Retrieve packages from the database or any other data source
            $packages = Package::all(); // Example query to retrieve all packages
            //  TODO GET SUB PACKEGES

            return response()->json($packages);
        } catch (\Exception $e) {
            // Log the error for further investigation
            \Log::error('Error fetching packages: ' . $e->getMessage());
            // Return a 500 Internal Server Error response
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }

    public function getPackageOption(Request $request){
        
        $package_id = $request->input('package_id');

        $packageOptions = PackageOption::where('package_id', $package_id)->get();

        return response()->json($packageOptions->all());
        // return response()->json($request);
    }
   
}
