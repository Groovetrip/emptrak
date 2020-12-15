@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8 justify-content-start pt-4">

                <h1 class="mb-4">Update Employee</h1>

                <form action="/employees/{{ $employee->id }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-row pt-2">
                        <div class="form-group col-md-5">
                            <label for="first-name-input" class="text-md-right">First Name*</label>
                            <input
                                id="first-name-input"
                                type="text"
                                name="first_name"
                                class="form-control @error('first_name') is-invalid @enderror"
                                value="{{ $employee->first_name }}"
                                required
                                autofocus
                            />
                            @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-2">
                            <label for="middle-initial-input" class="text-md-right">Middle Initial</label>
                            <input
                                id="middle-initial-input"
                                type="text"
                                name="middle_initial"
                                class="form-control @error('middle_initial') is-invalid @enderror"
                                value="{{ $employee->middle_initial }}"
                                required
                            />
                            @error('middle_initial')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-5">
                            <label for="last-name-input" class="text-md-right">Last Name*</label>
                            <input
                                id="last-name-input"
                                type="text"
                                name="last_name"
                                class="form-control @error('last_name') is-invalid @enderror"
                                value="{{ $employee->last_name }}"
                                required
                            />
                            @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row pt-2">
                        <div class="form-group col-md-6">
                            <label for="gender-select" class="text-md-right">Gender</label>
                            <select
                                id="gender-select"
                                name="gender"
                                class="form-control @error('gender') is-invalid @enderror"
                            >
                                <option value="">Select</option>
                                @foreach(App\Models\Employee::getGenders() as $gender)
                                    <option {{ $employee->gender == $gender ? 'selected' : '' }} value="{{ $gender }}">{{ $gender }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="birth-date-input" class="text-md-right">Birth Date</label>
                            <input
                                id="birth-date-input"
                                type="text"
                                name="birth_date"
                                class="form-control @error('birth_date') is-invalid @enderror"
                                value="{{ $employee->birth_date->format('m/d/Y') }}"
                                placeholder="mm/dd/yyyy"
                            />
                            @error('birth_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row pt-2">
                        <div class="form-group col-md-6">
                            <label for="email-input" class="text-md-right">Email</label>
                            <input
                                id="email-input"
                                type="text"
                                name="email"
                                class="form-control @error('email') is-invalid @enderror"
                                value="{{ $employee->email }}"
                                autocomplete="email"
                            />
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone-input" class="text-md-right">Phone</label>
                            <input
                                id="phone-input"
                                type="text"
                                name="phone"
                                class="form-control @error('phone') is-invalid @enderror"
                                value="{{ $employee->phone }}"
                            />
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row pt-2">
                        <div class="form-group col-md-10">
                            <label for="address-input" class="text-md-right">Address*</label>
                            <input
                                id="address-input"
                                type="text"
                                name="address"
                                class="form-control @error('address') is-invalid @enderror"
                                value="{{ $employee->address }}"
                                required
                            />
                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-2">
                            <label for="address2-input" class="text-md-right">Unit #</label>
                            <input
                                id="address2-input"
                                type="text"
                                name="address2"
                                class="form-control @error('address2') is-invalid @enderror"
                                value="{{ $employee->address2 }}"
                            />
                            @error('address2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row pt-2">
                        <div class="form-group col-md-6">
                            <label for="city-input" class="text-md-right">City*</label>
                            <input
                                id="city-input"
                                type="text"
                                name="city"
                                class="form-control @error('city') is-invalid @enderror"
                                value="{{ $employee->city }}"
                                required
                            />
                            @error('city')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-2">
                            <label for="state-input" class="text-md-right">State*</label>
                            <input
                                id="state-input"
                                type="text"
                                name="state"
                                class="form-control @error('state') is-invalid @enderror"
                                value="{{ $employee->state }}"
                                required
                            />
                            @error('state')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="zip-input" class="text-md-right">Zip*</label>
                            <input
                                id="zip-input"
                                type="text"
                                name="zip"
                                class="form-control @error('zip') is-invalid @enderror"
                                value="{{ $employee->zip }}"
                                required
                            />
                            @error('zip')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row pt-2">
                        <div class="form-group col-md-6">
                            <label for="classification-select" class="text-md-right">Classification</label>
                            <select
                                id="classification-select"
                                name="classification"
                                class="form-control @error('classification') is-invalid @enderror"
                                required
                            >
                                <option value="">Select</option>
                                @foreach(App\Models\Employee::getClassifications() as $classification)
                                    <option {{ $employee->classification == $classification ? 'selected' : '' }} value="{{ $classification }}">{{ $classification }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="payment-method-select" class="text-md-right">Payment Method</label>
                            <select
                                id="payment-method-select"
                                name="payment_method"
                                class="form-control @error('payment_method') is-invalid @enderror"
                                required
                            >
                                <option value="">Select</option>
                                @foreach(App\Models\Employee::getPaymentMethods() as $payment_method)
                                    <option {{ $employee->payment_method == $payment_method ? 'selected' : '' }} value="{{ $payment_method }}">{{ $payment_method }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-row pt-2">
                        <div class="form-group col-md-4">
                            <label for="salary-input" class="text-md-right">Salary</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input
                                    id="salary-input"
                                    type="text"
                                    name="salary"
                                    class="form-control @error('salary') is-invalid @enderror"
                                    value="{{ $employee->salary }}"
                                    placeholder="0.00"
                                />
                            </div>
                            @error('salary')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="hourly-rate-input" class="text-md-right">Hourly Rate</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input
                                    id="hourly-rate-input"
                                    type="text"
                                    name="hourly_rate"
                                    class="form-control @error('hourly_rate') is-invalid @enderror"
                                    value="{{ $employee->hourly_rate }}"
                                    placeholder="0.00"
                                />
                            </div>
                            @error('hourly_rate')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="commission-rate-input" class="text-md-right">Commission Rate</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input
                                    id="commission-rate-input"
                                    type="text"
                                    name="commission_rate"
                                    class="form-control @error('commission_rate') is-invalid @enderror"
                                    value="{{ $employee->commission_rate }}"
                                    placeholder="0.00"
                                />
                            </div>
                            @error('commission_rate')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row pt-2">
                        <div class="form-group col-md-6">
                            <label for="routing-number-input" class="text-md-right">Routing Number</label>
                            <input
                                id="routing-number-input"
                                type="text"
                                name="routing_number"
                                class="form-control @error('routing_number') is-invalid @enderror"
                                value="{{ $employee->routing_number }}"
                            />
                            @error('routing_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="account-number-input" class="text-md-right">Account Number</label>
                            <input
                                id="account-number-input"
                                type="text"
                                name="account_number"
                                class="form-control @error('account_number') is-invalid @enderror"
                                value="{{ $employee->account_number }}"
                            />
                            @error('account_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mt-4">Save</button>

                </form>

            </div>
        </div>

    </div>

@endsection
