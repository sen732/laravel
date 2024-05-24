<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WaterSource;

class WaterSourceController extends Controller
{
    public function index()
    {
        $waterSources = WaterSource::paginate(10);
        return view('water_sources.index', compact('waterSources'));
    }

    public function create()
    {
        return view('water_sources.create');
    }

    public function store(Request $request)
    {
        WaterSource::create($request->all());
        return redirect()->route('water-sources.index');
    }

    public function edit($id)
    {
        $waterSource = WaterSource::findOrFail($id);
        return view('water_sources.edit', compact('waterSource'));
    }
    public function show(WaterSource $waterSource)
    {
        return view('water_sources.show', compact('waterSource'));
    }

    public function update(Request $request, $id)
    {
        $waterSource = WaterSource::findOrFail($id);
        $waterSource->update($request->all());
        return redirect()->route('water-sources.index');
    }

    public function destroy($id)
    {
        $waterSource = WaterSource::findOrFail($id);
        $waterSource->delete();
        return redirect()->route('water-sources.index');
    }
}
