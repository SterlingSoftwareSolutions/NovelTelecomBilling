<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Package extends Model
{
    protected $fillable = [
        'package_id',
        'service_id',
        'package_name',
    ];

    public function packageOptions()
    {
        return $this->hasMany(PackageOption::class, 'package_id');
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public static function getPackageName($package_name, $service_id)
    {
        return DB::table('packages')
            ->where('package_name', $package_name)
            ->where('service_id', $service_id)
            ->get();
    }
}