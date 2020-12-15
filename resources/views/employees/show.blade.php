@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="card shadow-sm mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div>
                    Employee Details
                </div>
                <div>
                    @can('edit employees')
                        <a
                            href="/employees/{{ $employee->id }}/edit"
                            type="button"
                            class="btn btn-primary"
                        >
                            Edit
                        </a>
                    @endcan
                </div>
            </div>
            <div class="card-body">
                <h3>{{ $employee->full_name }}</h3>
                <p>
                    Email: {{ $employee->email }}<br/>
                    Address: {{ $employee->full_address }}<br/>
                    @can('view payments')
                    Payment Method: {{ $employee->payment_method }}<br/>
                    Classification: {{ $employee->classification }}<br/>
                    Rate: ${{ number_format(
                        $employee->classification === App\Models\Employee::SALARIED ? $employee->salary :
                        ($employee->classification === App\Models\Employee::COMMISSIONED ? $employee->commission_rate :
                        $employee->hourly_rate)
                    , 2, '.', '') }}
                    @endcan
                </p>
            </div>
        </div>
        <div class="card shadow-sm">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div>
                    Notes
                </div>
                <div>
                    <button
                        id="create-note-btn"
                        type="button"
                        class="btn btn-primary"
                        data-toggle="modal"
                        data-target="#create-note-modal"
                    >
                        Create Note
                    </button>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    @foreach($employee->notes as $note)
                        <tr>
                            <td class="align-middle text-left">
                                {{ $note->agent->name }}
                            </td>
                            <td class="align-middle text-left">
                                {{ $note->note }}
                            </td>
                            <td class="align-middle text-left">
                                {{ $note->created_at->format('M d, Y') }}
                            </td>
                            <td class="align-middle text-right">
                                <form action="/employee-notes/{{ $note->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    @include('employees.includes.create-note-modal', ['employee' => $employee])

@endsection
