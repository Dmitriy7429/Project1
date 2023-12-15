<?php

namespace App\Http\Controllers;

use App\Models\Reception_of_equipment;
use Illuminate\Http\Request;

class ReceptionOfEquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $event = Reception_of_equipment::all();
        return $event;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $event = New ComingProduct;

        $event->name = $request->name;
        $event->update_at = $request->update_at;
        $event->created_at = $request->created_at;

        $event->Save();

        return $event;
    }

    /**
     * Display the specified resource.
     */
    public function show(Reception_of_equipment $reception_of_equipment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reception_of_equipment $reception_of_equipment)
    {
        $event = New ComingProduct;

        $event->name = $request->name;
        $event->update_at = $request->update_at;
        $event->created_at = $request->created_at;

        $event->Save();

        return true;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reception_of_equipment $reception_of_equipment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reception_of_equipment $reception_of_equipment)
    {
        ComingProduct::destroy($id);

        return true;
    }
}
