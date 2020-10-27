@extends('layouts.app')

@section('content')

    <div class="container pt-4">

        <h1 class="mb-4">Employees</h1>

        <table class="table table-striped table-hover shadow-sm">
            <thead>
                <tr class="bg-primary text-white">
                    <td>Id</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Phone</td>
                    <td>Birth Date</td>
                </tr>
            </thead>
            <tbody>
                @foreach($employees as $employee)
                    <tr>
                        <td>{{ $employee->id }}</td>
                        <td>{{ $employee->full_name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->phone }}</td>
                        <td>{{ $employee->birth_date->format('m-d-Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
