<?php
namespace App\Http\Controllers;

use App\Models\SanitationFacility;
use App\Models\WaterSource;

class DashboardController extends Controller
{
    public function index()
    {
        $sanitationFacilities = SanitationFacility::paginate(10);
        $waterSources = WaterSource::paginate(10);

        return view('dashboard', compact('sanitationFacilities', 'waterSources'));
    }
}
