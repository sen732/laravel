<?php

namespace App\Http\Controllers;

use App\Models\SanitationFacility;
use Illuminate\Http\Request;

class SanitationFacilityController extends Controller
{    public function index()
    {
        $sanitationFacilities = SanitationFacility::paginate(10); // Pagination
        return view('sanitation_facilities.index', compact('sanitationFacilities'));
    }

    public function create()
    {
        return view('sanitation_facilities.create');
    }

    public function store(Request $request)
    {
        SanitationFacility::create($request->all());
        return redirect()->route('sanitation-facilities.index')->with('success', 'Sanitation Facility created successfully.');
    }

    public function show(SanitationFacility $sanitationFacility)
    {
        return view('sanitation_facilities.show', compact('sanitationFacility'));
    }

    public function edit(SanitationFacility $sanitationFacility)
    {
        return view('sanitation_facilities.edit', compact('sanitationFacility'));
    }

    public function update(Request $request, SanitationFacility $sanitationFacility)
    {
        $sanitationFacility->update($request->all());
        return redirect()->route('sanitation-facilities.index')->with('success', 'Sanitation Facility updated successfully.');
    }

    public function destroy(SanitationFacility $sanitationFacility)
    {
        $sanitationFacility->delete();
        return redirect()->route('sanitation-facilities.index')->with('success', 'Sanitation Facility deleted successfully.');
    }
}

