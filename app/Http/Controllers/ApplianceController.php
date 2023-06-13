<?php

namespace App\Http\Controllers;

use App\Models\Appliance;
use Illuminate\Http\Request;

class ApplianceController extends Controller
{
    public function index()
    {
        $appliances = Appliance::all();

        return response()->json($appliances);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'voltage' => 'required',
            'brand' => 'required',
        ]);

        $appliance = Appliance::create($validatedData);

        return response()->json($appliance, 201);
    }

    public function show(Appliance $appliance)
    {
        return response()->json($appliance);
    }

    public function update(Request $request, Appliance $appliance)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'voltage' => 'required',
            'brand' => 'required',
        ]);

        $appliance->update($validatedData);

        return response()->json($appliance);
    }

    public function destroy(Appliance $appliance)
    {
        $appliance->delete();

        return response()->json(null, 204);
    }
}
