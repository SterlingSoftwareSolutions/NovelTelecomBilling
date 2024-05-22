<?php

namespace App\Imports;

use App\Models\ChargesSummary;
use App\Models\AccountService;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ChargesSummaryImport implements ToModel, WithHeadingRow
{
    private function transformDate($date)
    {
        if (\DateTime::createFromFormat('d/m/Y', $date) !== false) {
            return \DateTime::createFromFormat('d/m/Y', $date)->format('Y-m-d');

        }

        return $date;
    }

    public function model(array $row)
    {
        // Retrieve contact_code based on service_number
        $accountService = AccountService::where('phonenumber', $row['service_number'])->first();


        // Check if contact_code exists for the service_number
        if ($accountService && $accountService->contact_code) {
            $chargesummary = [
                'cost_centre' => $row['cost_centre'] ,
                'service_number' => $row['service_number'],
                'service_narrative' => $row['service_narrative'],
                'service_type' => $row['service_type'] ,
                'charge_group' => $row['charge_group'] ,
                'charge_description' => $row['charge_description'] ,
                'from' => $this->transformDate($row['from'])?? 1,
                'to' => $this->transformDate($row['to']),
                'charge_amount' => $row['charge_amount_ex_tax'],
                'contact_code' => $accountService->contact_code
            ];
            // Create ServiceSummary model
            return new ChargesSummary($chargesummary);

        } else {
            // If contact_code is not found, return null to skip adding the data
            return null;
        }
    }
}
