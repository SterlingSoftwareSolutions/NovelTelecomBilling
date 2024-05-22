<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\CustomersImport;
use App\Imports\AccountsImport;
use App\Imports\ChargesSummaryImport;
use App\Imports\ServiceSummaryImport;

class UploadController extends Controller
{
    public function uploadFile(Request $request)
    {
        $request->validate([
            'csv_file' => 'required|file|mimes:xlsx,csv',
        ]);

        Excel::import(new CustomersImport, request()->file('csv_file'));

        return back()->with('success', 'Customers imported successfully.');
    }

    public function excelupload(Request $request){

        $request->validate([
            'csv_file' => 'required|file|mimes:xlsx,csv',
        ]);

        Excel::import(new AccountsImport, request()->file('csv_file'));

        return back()->with('success', 'Accounts imported successfully.');

    }

    public function ServiceSummaryUpload(Request $request)
    {
        $request->validate([
            'csv_file' => 'required|file|mimes:xlsx,csv',
        ]);

        Excel::import(new ServiceSummaryImport, request()->file('csv_file'));

        return back()->with('success', 'Service Summary imported successfully.');
    }

    public function ChargesSummaryUpload(Request $request)
    {
        $request->validate([
            'csv_file' => 'required|file|mimes:xlsx,csv',
        ]);

        Excel::import(new ChargesSummaryImport, request()->file('csv_file'));

        return back()->with('success', 'Service Summary imported successfully.');
    }
}
