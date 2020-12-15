@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in with account authority: ') }}

                    <font color="#a00000">
                    @hasrole('Super Admin')
                    Super Admin
                    @endhasrole
                    @hasrole('Reporter')
                    Reporter
                    @endhasrole
                    @hasrole('Accountant')
                    Accountant
                    @endhasrole
                    </font>

                    @hasanyrole('Super Admin|Admin|Accountant')
                    <hr>
                    <form action="/employees" method="GET">
                        <div class="search-row mb-2">
                            <input
                                type="text"
                                name="name"
                                value="{{ request('name') }}"
                                placeholder="Search Employees"
                                class="form-control"
                                width="350"
                            />
                        </div>
                        <div class="d-flex justify-content-between mb-4">
                            <button type="submit" class="btn btn-primary mr-3">Search</button>
                        </div>
                    </form>
                    @endhasanyrole
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
