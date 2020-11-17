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
                    <select
                        name="classification"
                        class="form-control"
                    >
                        <option value="">Classification</option>
                        @foreach(App\Models\Employee::getClassifications() as $classification)
                            <option value="{{ $classification }}" {{ request('classification') === $classification ? 'selected' : '' }}>{{ $classification }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <select
                        name="payment_method"
                        class="form-control"
                    >
                        <option value="">Payment Method</option>
                        @foreach(App\Models\Employee::getPaymentMethods() as $payment_method)
                            <option value="{{ $payment_method }}" {{ request('payment_method') === $payment_method ? 'selected' : '' }}>{{ $payment_method }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="d-flex justify-content-between mb-4">
                <div>
                    <button type="submit" class="btn btn-primary mr-3">Search</button>
                    <a href="/employees" role="button" class="btn btn-primary">Clear</a>
                </div>
                <div>
                    @can('edit employees')
                    <a href="/employees/create" role="button" class="btn btn-primary">Create</a>
                    @endcan
                </div>
            </div>

        </form>

        <table class="table table-striped table-hover shadow-sm">
            <thead>
                <tr class="bg-primary text-white">
                    <td>Name</td>
                    <td>Email</td>
                    <td>Classification</td>
                    <td>Payment Method</td>
                    <td>Created At</td>
                </tr>
            </thead>
            <tbody>
                @foreach($employees as $employee)
                    <tr onclick="window.location = '/employees/{{ $employee->id }}'" class="cursor-pointer">
                        <td>{{ $employee->full_name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->classification }}</td>
                        <td>{{ $employee->payment_method }}</td>
                        <td>{{ $employee->created_at->format('M d, Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="row pt-3 justify-content-center">
            {{ $employees->appends(request()->input())->links() }}
        </div>

    </div>

@endsection
