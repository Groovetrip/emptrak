<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact([
            'employees',
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Employee $employee
     * @return View
     */
    public function show(Employee $employee)
    {
        return view('employees.show', compact([
            'employee',
        ]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Employee $employee
     * @return View
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Employee $employee
     * @return RedirectResponse
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Employee $employee
     * @return RedirectResponse
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
