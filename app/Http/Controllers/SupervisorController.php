<?php

namespace App\Http\Controllers;

use App\Models\Supervisor;
use App\Http\Requests\StoreSupervisorRequest;
use App\Http\Requests\UpdateSupervisorRequest;
use App\Models\Departamento;
use Illuminate\Http\Request;


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
        // dd($request);
        // dd($supervisor);
        $request->validated();
        $supervisor->update($request->all());
        return redirect()->route('supervisores.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supervisor $supervisor)
    {
        dd($supervisor);
    }

    public function editSupervisores($id){
        // dd($id);
        $supervisor = Supervisor::find($id);
        $departamentos = Departamento::all();
        return view('admin.supervisor.edit', compact('supervisor','departamentos'));
    }

    public function updateSupervisores(Request $request, $id){
        Request()->validate([
            'nombre' => 'required',
            'cargo' => 'required',
            'departamento_id' => 'required'
        ]);

        $supervisorUpdate = Supervisor::find($id);
        $supervisorUpdate->update([
            'nombre' => $request->nombre,
            'cargo' => $request->cargo,
            'departamento_id' => $request->departamento_id
        ]);

        if($supervisorUpdate){
            return redirect()->route('supervisores.index');
        }
    }

    public function deleteSupervisores($id){
        $deleteSupervisor = Supervisor::find($id);
        $deleteSupervisor->delete();

        if ($deleteSupervisor) {
           return redirect()->route('supervisores.index');
        }
    }
}
