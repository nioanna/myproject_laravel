<?php

namespace App\Http\Controllers;

use App\Models\ResidentialBuilding;
use Illuminate\Http\Request;

class ResidentialBuildingController extends Controller
{
    public function index() {
        return ResidentialBuilding::all();
    }
    public function show(ResidentialBuilding $residentialBuilding) {
        return $residentialBuilding;
    }
    public function store(Request $request) {
        $residentialBuilding = ResidentialBuilding::create($request->all());
        return response()->json($residentialBuilding,201);
    }
    public function update(Request $request, ResidentialBuilding $residentialBuilding) {
        $residentialBuilding->update($request->all());
        return response()->json($residentialBuilding,200);
    }
    public function delete(ResidentialBuilding $residentialBuilding) {
        $residentialBuilding->delete();

        return response()->json(null,204);
    }
}
