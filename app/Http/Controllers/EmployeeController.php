<?php

namespace App\Http\Controllers;

use App\Exports\EmployeesExport;
use App\Models\Employee;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Requests\StoreEmployee;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class EmployeeController extends Controller
{
    /**
     * EmployeeController constructor.
     */
    public function __construct()
    {
        $this->middleware('can:edit employees')->except(['index', 'show']);
        $this->middleware('can:export employees')->only('exportAll');
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $employees = Employee::name(request('name'))
            ->email(request('email'))
            ->classification(request('classification'))
            ->paymentMethod(request('payment_method'))
            ->orderBy('last_name', 'ASC')
            ->paginate(request('results_per_page', Employee::RESULTS_PER_PAGE));

        return view('employees.index', compact('employees'));
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
     * @param StoreEmployee $request
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
     * @param $employeeId
     * @return View
     */
    public function show($employeeId)
    {
        $employee = Employee::with('notes')->findOrFail($employeeId);
        return view('employees.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Employee $employee
     * @return View
     */
    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreEmployee $request
     * @param Employee $employee
     * @return RedirectResponse
     */
    public function update(StoreEmployee $request, Employee $employee)
    {
        $employee->update($request->all());
        return redirect("/employees/$employee->id");
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

        return redirect('/employees');
    }

    /**
     * Returns export of employees table
     * @return BinaryFileResponse
     */
    public function exportAll()
    {
        return Excel::download(new EmployeesExport, 'employees.csv');
    }
}
