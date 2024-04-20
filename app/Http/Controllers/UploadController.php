<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\CustomersImport;

class UploadController extends Controller
{
    public function uploadFile(Request $request)
    {
        dd($request->all());
        $request->validate([
            'csv_file' => 'required|file|mimes:xlsx,csv',
        ]);

        Excel::import(new CustomersImport, request()->file('csv_file'));

        return back()->with('success', 'Customers imported successfully.');
    }
}

