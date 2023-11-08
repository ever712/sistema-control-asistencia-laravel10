<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Http\Requests\StoreDepartamentoRequest;
use App\Http\Requests\UpdateDepartamentoRequest;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departamentos = Departamento::all();
        return view('admin.departamento.index', compact('departamentos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.departamento.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDepartamentoRequest $request)
    {
        // dd($request);
        Departamento::create($request->all());
        return redirect()->route('departamentos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Departamento $departamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Departamento $departamento)
    {
        // dd($departamento);
        return view('admin.departamento.edit', compact('departamento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDepartamentoRequest $request, Departamento $departamento)
    {
        //  dd($request);
        $request->validated();
        $departamento->update($request->all());
        return redirect()->route('departamentos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Departamento $departamento)
    {
        $departamento->delete();
        return redirect()->route('departamentos.index');
    }
}
