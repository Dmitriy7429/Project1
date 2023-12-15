<?php

namespace App\Http\Controllers;

use App\Models\Nomenclature;
use Illuminate\Http\Request;

class NomenclatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $event = Nomenclature::all();
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
    public function show(Nomenclature $nomenclature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nomenclature $nomenclature)
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
    public function update(Request $request, Nomenclature $nomenclature)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nomenclature $nomenclature)
    {
        ComingProduct::destroy($id);

        return true;
    }
}
