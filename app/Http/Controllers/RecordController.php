<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $records = Record::all();
        return view('record.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('record.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'id_number' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:255',
            'status' => 'in:sale,not_completed',
        ]);

        Record::create($request->all());


        return '<h1>Ya tenemos tu solicitud, uno de nuestros asesores se comunicará contigo pronto.</h1>';
    }

    /**
     * Display the specified resource.
     */
    public function show(Record $record)
    {
        return view('record.show', compact('record'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Record $record)
    {
        return view('record.edit', compact('record'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Record $record)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'id_number' => 'string|max:255,id_number,' . $record->id,
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'status' => 'required|in:sale,not_completed',
        ]);

        $record->update($request->all());

        return redirect()->route('records.index')->with('success', 'Record updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Record $record)
    {
        $record->delete();
    
        return redirect()->route('records.index')->with('success', 'Record deleted successfully.');
    }
}
