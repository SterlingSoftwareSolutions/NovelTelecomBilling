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
        // $validatedAccountData  = $request->validate([
        //     'contact_code' => 'required|numeric',
        //     'typeSelect' => 'required|numeric',
        //     'key' => 'nullable|numeric',
        //     'title' => 'nullable|numeric',
        //     'business_unit' => 'required|string|max:255',
        //     'name' => 'required|string|max:255',
        //     'trading_name' => 'nullable|string|max:255',
        //     'acn' => 'required|string|max:255',
        //     'abn' => 'required|string|max:255',
        //     'email' => 'nullable|email|max:255',
        //     'question' => 'nullable|string|max:255',
        //     'answer' => 'nullable|string|max:255',
        //     'initials' => 'nullable|string|max:255',
        //     'first_name' => 'required|string|max:255',
        //     'last_name' => 'required|string|max:255',
        //     'gender' => 'required|string|max:255',
        //     'date_of_birth' => 'required|date',
        //     'salutation' => 'nullable|string|max:255',
        //     'employee_no' => 'nullable|string|max:255',
        //     'question_2' => 'nullable|string|max:255',
        //     'answer_2' => 'nullable|string|max:255',

        //     'address1' => 'required|string|max:255',
        //     'address2' => 'required|string|max:255',
        //     'post_code' => 'required|numeric|max:255',
        //     'suburb' => 'required|string|max:255',
        //     'state' => 'required|string|max:255',
        //     'country' => 'required|string|max:255',
        //     'address_type' => 'required|string|max:255',

        //     'area_code' => 'required|string|max:255',
        //     'phone_number' => 'required|string|max:255',
        //     'phone_type' => 'required|string|max:255',

        //     'paymentType' => 'nullable|string|max:255',
        //     'provide_paper_bill' => 'required|string|max:255',
        //     'provide_email_bill' => 'required|string|max:255',
        //     'provide_excel_bill' => 'required|string|max:255',

        //     'contact_code2' => 'required|string|max:255',
        //     'contact_type' => 'required|string|max:255',
        //     'name1' => 'required|string|max:255',
        // ]);

        // Create the Account record
        $accountData = [
            'contact_code' => $request->contact_code,
            'typeSelect' => $request->typeSelect,
            'key' => $request->key,
            'title' => $request->title,
            'business_unit' => 'Novel Telecom',
            'name' => $request->name,
            'trading_name' => $request->trading_name,
            'acn' => $request->acn,
            'abn' => $request->abn,
            'email' => $request->email,
            'question' => $request->question,
            'answer' => $request->answer,
            'initials' => $request->initials,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'salutation' => $request->salutation,
            'employee_no' => $request->employee_no,
            'question_2' => $request->question_2,
            'answer_2' => $request->answer_2,
        ];
        $account = Account::create($accountData);

        // Create the Address record
        $addressData  = [
            'contact_code' => $request->contact_code,
            'address1' => $request->address1,
            'address2' => $request->address2,
            'post_code' => $request->post_code,
            'suburb' => $request->suburb,
            'state' => $request->state,
            'country' => $request->country,
            'address_type' => json_encode($request->input('addresstype')),

        ];
        $address = Address::create($addressData);

        // Create the Phone record
        $phoneData  = [
            'contact_code' => $request->contact_code,
            'area_code' => $request->area_code,
            'phone_number' => $request->phone_number,
            'name1' => $request->name1,
        ];
        $phone = Phone::create($phoneData);

        // Create the Billing record
        $billingData  = [
            'contact_code' => $request->contact_code,
            'paymentType' => $request->paymentType,
            'bill_types' => json_encode($request->input('bill_types')), // Modified here
            // 'provide_paper_bill' => $request->provide_paper_bill,
            // 'provide_email_bill' => $request->provide_email_bill,
            // 'provide_excel_bill' => $request->provide_excel_bill,
        ];
        $billing = Billing::create($billingData);

        // Create the Contact record
        $contactData = [
            'contact_code' => $request->contact_code,
            'contact_code2' => $request->contact_code2,
            'contact_type' => $request->contact_type,
            'contact_code2' => $request->contact_code2,
        ];
        $contact = Contact::create($contactData);

        // Redirect the user after successful creation
        return view('account.newAccount')->with('success', 'Account created successfully!');
    }

    public function search(Request $request)
    {
        try {
            $account_number = $request->search;
            $account = Account::where('contact_code', $account_number)->first();

            if ($account) {
                $address = Address::getAddressDetails($account->contact_code);
                $bill = Billing::getBillDetails($account->contact_code);
                // dd($bill->bill_types);
                $contact = Contact::getContactDetails($account->contact_code);
                $phone = Phone::getPhoneDetails($account->contact_code);
                // dd ($address);
                return view('user.home', compact('account', 'address', 'bill', 'contact', 'phone'));
            } else {
                $account = null;
                return view('user.home', compact('account'));
            }
        } catch (Exception $e) {
            $account = null;
            return view('user.home', compact('account'));
        }
    }
}
