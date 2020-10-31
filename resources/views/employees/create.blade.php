@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-6 justify-content-start pt-4">

                <h1 class="mb-4">Create Employee</h1>

                <form action="/employees" method="POST">
                    @csrf
                    @method('POST')

                    <div class="form-group pt-2">
                        <label for="first-name-input" class="text-md-right">First Name</label>
                        <input
                            id="first-name-input"
                            type="text"
                            name="first_name"
                            class="form-control @error('first_name') is-invalid @enderror"
                            value="{{ old('first_name') }}"
                            required
                            autofocus
                        />
                        @error('first_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group pt-2">
                        <label for="last-name-input" class="text-md-right">Last Name</label>
                        <input
                            id="last-name-input"
                            type="text"
                            name="last_name"
                            class="form-control @error('last_name') is-invalid @enderror"
                            value="{{ old('last_name') }}"
                            required
                        />
                        @error('last_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group pt-2">
                        <label for="email-input" class="text-md-right">Email</label>
                        <input
                            id="email-input"
                            type="text"
                            name="email"
                            class="form-control @error('email') is-invalid @enderror"
                            value="{{ old('email') }}"
                            required
                            autocomplete="email"
                        />
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group pt-2">
                        <label for="phone-input" class="text-md-right">Phone</label>
                        <input
                            id="phone-input"
                            type="text"
                            name="phone"
                            class="form-control @error('phone') is-invalid @enderror"
                            value="{{ old('phone') }}"
                            required
                        />
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group pt-2">
                        <label for="gender-select" class="text-md-right">Gender</label>
                        <select
                            id="gender-select"
                            name="gender"
                            class="form-control @error('gender') is-invalid @enderror"
                            required
                        >
                            <option value="">Select</option>
                            <option {{ old('gender') == 'male' ? 'selected' : '' }} value="male">Male</option>
                            <option {{ old('gender') == 'female' ? 'selected' : '' }} value="female">Female</option>
                            <option {{ old('gender') == 'other' ? 'selected' : '' }} value="other">Other</option>
                        </select>
                    </div>

                    <div class="form-group pt-2">
                        <label for="birth-date-input" class="text-md-right">Birth Date</label>
                        <input
                            id="birth-date-input"
                            type="text"
                            name="birth_date"
                            class="form-control @error('birth_date') is-invalid @enderror"
                            value="{{ old('birth_date') }}"
                            placeholder="mm/dd/yyyy"
                            required
                        />
                        @error('birth_date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mt-4">Create</button>

                </form>

            </div>
        </div>

    </div>

@endsection
