<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $primaryKey = 'contact_code'; // Define the primary key

    public function address()
    {
        return $this->hasOne(Address::class, 'contact_code'); // Define the relationship with Address
    }

    public function billing()
    {
        return $this->hasOne(Billing::class, 'contact_code'); // Define the relationship with Billing
    }

    public function contact()
    {
        return $this->hasOne(Contact::class, 'contact_code'); // Define the relationship with Contact
    }

    public function phones()
    {
        return $this->hasMany(Phone::class, 'contact_code'); // Define the relationship with Phone
    }
}
