@extends('layouts.app')

@section('content')
    @foreach($employees as $employee)
        {{ $employee }}
    @endforeach
@endsection
