<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Address;
use App\Models\Billing;
use App\Models\Contact;
use App\Models\Phone;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function account_index(Request $request)
    {
        return view('account.newAccount');
    }

    public function store(Request $request)
    {
            dd($request);
        // Validate the incoming request data
        $validatedAccountData  = $request->validate([
            'contact_code' => 'required|numeric',
            'typeSelect' => 'required|numeric',
            'key' => 'nullable|numeric',
            'title' => 'nullable|numeric',
            'business_unit' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'trading_name' => 'nullable|string|max:255',
            'acn' => 'required|string|max:255',
            'abn' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'question' => 'nullable|string|max:255',
            'answer' => 'nullable|string|max:255',
            'initials' => 'nullable|string|max:255',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'salutation' => 'nullable|string|max:255',
            'employee_no' => 'nullable|string|max:255',
            'question_2' => 'nullable|string|max:255',
            'answer_2' => 'nullable|string|max:255',

            'address1' => 'required|string|max:255',
            'address2' => 'required|string|max:255',
            'post_code' => 'required|numeric|max:255',
            'suburb' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'address_type' => 'required|string|max:255',

            'area_code' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'phone_type' => 'required|string|max:255',

            'paymentType' => 'nullable|string|max:255',
            'provide_paper_bill' => 'required|string|max:255',
            'provide_email_bill' => 'required|string|max:255',
            'provide_excel_bill' => 'required|string|max:255',

            'contact_code2' => 'required|string|max:255',
            'contact_type' => 'required|string|max:255',
            'name1' => 'required|string|max:255',
        ]);

        // Create the Account record
        $account = Account::create($validatedAccountData );

        // Create the Address record
        $addressData  = [
            'address1' => $request->address1,
            'address2' => $request->address2,
            'post_code' => $request->post_code,
            'suburb' => $request->suburb,
            'state' => $request->state,
            'country' => $request->country,
            'address_type' => $request->country,
        ];
        $address = Address::create($addressData);

        // Create the Phone record
        $phoneData  = [
            'area_code' => $request->area_code,
            'phone_number' => $request->phone_number,
            'name1' => $request->name1,
        ];
        $phone = Phone::create($phoneData );

        // Create the Billing record
        $billingData  = [
            'paymentType' => $request->paymentType,
            'provide_paper_bill' => $request->provide_paper_bill,
            'provide_email_bill' => $request->provide_email_bill,
            'provide_excel_bill' => $request->provide_excel_bill,
        ];
        $billing = Billing::create($billingData );

        // Create the Contact record
        $contactData = [
            'contact_code2' => $request->contact_code2,
            'contact_type' => $request->contact_type,
            'contact_code2' => $request->contact_code2,
        ];
        $contact = Contact::create($contactData);

        // Redirect the user after successful creation
        return redirect()->route('accounts.index')->with('success', 'Account created successfully!');
    }
}

