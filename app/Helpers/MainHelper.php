<?php

namespace App\Helpers;

use App\Models\Office;

class MainHelper
{
    public static function getOffice() {
        $query = Office::where('office_status', 'Public')->get();
        return $query;
    }
}