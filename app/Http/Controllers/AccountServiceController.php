<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\AccountService;
use Exception;
use Illuminate\Support\Facades\Log;

class AccountServiceController extends Controller
{
    public function update(Request $request)
{
    try {
        // Validate the incoming data
        $validatedData = $request->validate([
            // Validation rules for each field
        ]);

        // Find the account service by phone number
        $accountService = Account::where('contact_code', $validatedData['Phone Number'])->firstOrFail();
        // Update the account service with validated data
        $accountService->update([
            // Update fields with validated data
        ]);

        return response()->json(['success' => true, 'message' => 'Data updated successfully.']);
    } catch (Account $e) {
        return response()->json(['success' => false, 'message' => 'Account service not found.'], 404);
    } catch (\Exception $e) {
        Log::error('Error updating account service: ' . $e->getMessage());
        return response()->json(['success' => false, 'message' => 'An error occurred while updating the data.'], 500);
    }
}
}

