<?php

namespace App\Http\Controllers;

use App\Models\EmployeeNote;
use App\Http\Requests\StoreEmployeeNote;
use App\Http\Requests\UpdateEmployeeNote;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class EmployeeNoteController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param StoreEmployeeNote $request
     * @return RedirectResponse
     */
    public function store(StoreEmployeeNote $request)
    {
        EmployeeNote::create([
            'agent_id' => Auth::user()->id,
            'employee_id' => request('employee_id'),
            'note' => request('note'),
        ]);

        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateEmployeeNote $request
     * @param EmployeeNote $employeeNote
     * @return RedirectResponse
     */
    public function update(UpdateEmployeeNote $request, EmployeeNote $employeeNote)
    {
        $employeeNote->update([
            'agent_id' => Auth::user()->id,
            'note' => request('note'),
        ]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param EmployeeNote $employeeNote
     * @return RedirectResponse
     */
    public function destroy(EmployeeNote $employeeNote)
    {
        $employeeNote->delete();
        return back();
    }
}
