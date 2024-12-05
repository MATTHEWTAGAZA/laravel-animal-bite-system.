<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImmunizationRecord;

class ImmunizationRecordController extends Controller
{
    public function index()
    {
        $records = ImmunizationRecord::all();
        return view('immunization_records.index', compact('records'));
    }

    public function create()
    {
        return view('immunization_records.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            // Add other fields' validations
        ]);

        ImmunizationRecord::create($data);

        return redirect()->route('immunization-records.index');
    }

    public function show($id)
    {
        $record = ImmunizationRecord::findOrFail($id);
        return view('immunization_records.show', compact('record'));
    }

    public function edit($id)
    {
        $record = ImmunizationRecord::findOrFail($id);
        return view('immunization_records.edit', compact('record'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            // Add other fields' validations
        ]);

        $record = ImmunizationRecord::findOrFail($id);
        $record->update($data);

        return redirect()->route('immunization-records.index');
    }

    public function destroy($id)
    {
        $record = ImmunizationRecord::findOrFail($id);
        $record->delete();

        return redirect()->route('immunization-records.index');
    }
}
