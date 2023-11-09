<?php

namespace App\Http\Controllers;

use App\Models\Supervisor;
use App\Http\Requests\StoreSupervisorRequest;
use App\Http\Requests\UpdateSupervisorRequest;
use App\Models\Departamento;

class SupervisorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supervisores = Supervisor::all();
        return view('admin.supervisor.index',compact('supervisores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departamentos = Departamento::all();
        return view('admin.supervisor.create',compact('departamentos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSupervisorRequest $request)
    {
        // dd($request);
        Supervisor::create($request->all());
        return redirect()->route('supervisores.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Supervisor $supervisor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supervisor $supervisor)
    {
        dd($supervisor);
        // $departamentos = Departamento::all();
        // return view('admin.supervisor.edit',compact('supervisor','departamentos'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSupervisorRequest $request, Supervisor $supervisor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supervisor $supervisor)
    {
        dd($supervisor);
    }

}
