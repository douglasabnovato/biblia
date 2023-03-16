<?php

namespace App\Http\Controllers;

use App\Models\Testamento;
use Illuminate\Http\Request;

class TestamentoController extends Controller
{
    /**
     * DISPLAY ALL a listing of the resource.
     */
    public function index()
    {
        return Testamento::all();
    }

    /**
     * Store a newly CREATED resource in storage.
     */
    public function store(Request $request)
    {
        return Testamento::create($request->all());
    }

    /**
     * DISPLAY the specified resource.
     */
    public function show($id)
    {
        return Testamento::findOrFail($id);
    }

    /**
     * UPDATE the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $testamento = Testamento::findOrFail($id);
        $testamento->update($request->all());

        return $testamento;
    }

    /**
     * REMOVE the specified resource from storage.
     */
    public function destroy($id)
    {
        return Testamento::destroy($id);
    }
}
