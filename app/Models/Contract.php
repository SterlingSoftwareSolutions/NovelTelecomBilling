<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    protected $fillable = [
        'account_service_id',
        'contract',
        'contract_start_date',
        'contract_end_date',
        'status',
        'created_by'
    ];

    public function accountService()
    {
        return $this->belongsTo(AccountService::class);
    }
}
