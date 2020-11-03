<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Requests\StoreEmployee;

class EmployeeController extends Controller
{
    use SoftDeletes;

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(Request $request)
    {
        $employees = Employee::paginate($request->get('results-per-page', Employee::RESULTS_PER_PAGE));

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
    public function store(StoreEmployee $request)
    {
        $employee = Employee::create($request->all());

        return redirect("/employees/$employee->id");
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
        return view('employees.edit', compact([
            'employee'
        ]));
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
        $employee->update($request->all());

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Employee $employee
     * @return RedirectResponse
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return back();
    }
}
