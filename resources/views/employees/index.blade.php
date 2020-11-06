@extends('layouts.app')

@section('content')

    <div class="container pt-4">

        <div class="d-flex justify-content-between align-items-center mb-3">
             <h1 class="m-0">Employees</h1>
        </div>

        <form action="/employees" method="GET">

            <div class="search-row mb-2">
                <div>
                    <input
                        type="text"
                        name="name"
                        value="{{ request('name') }}"
                        placeholder="Name"
                        class="form-control"
                    />
                </div>
                <div>
                    <input
                        type="text"
                        name="email"
                        value="{{ request('email') }}"
                        placeholder="Email"
                        class="form-control"
                    />
                </div>
                <div>
                    <input
                        type="text"
                        name="phone"
                        value="{{ request('phone') }}"
                        placeholder="Phone"
                        class="form-control"
                    />
                </div>
                <div>
                    <select
                        name="gender"
                        class="form-control"
                    >
                        <option value="">Gender</option>
                        <option {{ request('gender') === 'male' ? 'selected' : '' }} value="male">Male</option>
                        <option {{ request('gender') === 'female' ? 'selected' : '' }} value="female">Female</option>
                        <option {{ request('gender') === 'other' ? 'selected' : '' }} value="other">Other</option>
                    </select>
                </div>
                <div>
                    <input
                        type="text"
                        name="birth_date"
                        value="{{ request('birth_date') }}"
                        placeholder="Birth date"
                        class="form-control"
                    />
                </div>
            </div>

            <div class="d-flex justify-content-between mb-4">
                <div>
                    <button type="submit" class="btn btn-primary mr-3">Search</button>
                    <a href="/employees" role="button" class="btn btn-primary">Clear</a>
                </div>
                <div>
                    <a href="/employees/create" role="button" class="btn btn-primary">Create</a>
                </div>
            </div>

        </form>

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
