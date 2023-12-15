<?php

namespace App\Http\Controllers;

use App\Models\Type_of_nomenclature;
use Illuminate\Http\Request;

class TypeOfNomenclatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $event = Type_of_nomenclature::all();
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
    public function show(Type_of_nomenclature $type_of_nomenclature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type_of_nomenclature $type_of_nomenclature)
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
    public function update(Request $request, Type_of_nomenclature $type_of_nomenclature)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type_of_nomenclature $type_of_nomenclature)
    {
        ComingProduct::destroy($id);

        return true;
    }
}
