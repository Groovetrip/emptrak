@extends('layouts.app')

@section('content')

    <div class="container pt-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
             <h1 class="m-0">Employees</h1>
             <a href="/employees/create" role="button" class="btn btn-primary">Create</a>
        </div>

        <table class="table table-striped table-hover shadow-sm">
            <thead>
                <tr class="bg-primary text-white">
                    <td>Id</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Phone</td>
                    <td>Gender</td>
                    <td>Birth Date</td>
                </tr>
            </thead>
            <tbody>
                @foreach($employees as $employee)
                    <tr onclick="window.location = '/employees/{{ $employee->id }}'" class="cursor-pointer">
                        <td>{{ $employee->id }}</td>
                        <td>{{ $employee->full_name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->phone }}</td>
                        <td>{{ ucfirst($employee->gender) }}</td>
                        <td>{{ $employee->birth_date->format('M d Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="row pt-3 justify-content-center">
            {{ $employees->appends(request()->input())->links() }}
        </div>

    </div>

@endsection
