@extends('layouts.app')

@section('content')

    <div class = "container">
        <div class ="header">
            <h1 class = "mb-4 ">{{ $employee->full_name}}</h1>
        </div>

        <div class = "static-info">
        </div>

        <div class = "custom-fields">
        </div>

    </div>



@endsection