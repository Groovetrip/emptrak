@extends('layouts.app')
@extends('layouts.detail')

@section('content')

    <div class = "container">
            <div class ="header">
                <h1 class = "mb-4 " style = "text-align: center;">{{ $employee->full_name}}</h1>
            </div>
        <div class = "flex-container">
            <div class = "static-info">
                <div class = "grid-container">
                    <div class = "grid-item">Id</div>
                    <div class = "grid-item">{{$employee->id}}</div>
                    <div class = "grid-item">Full Name</div>
                    <div class = "grid-item">{{$employee->full_name}}</div>
                    <div class = "grid-item">Email</div>
                    <div class = "grid-item">{{$employee->email}}</div>
                    <div class = "grid-item">Phone</div>
                    <div class = "grid-item">{{$employee->phone}}</div>
                    <div class = "grid-item">Gender</div>
                    <div class = "grid-item">{{ucfirst($employee->gender)}}</div>
                    <div class = "grid-item">Birth Date</div>
                    <div class = "grid-item">{{$employee->birth_date->format('M d Y')}}</div>
                </div>
            </div>
                

            <div class = "custom-fields">
                <div class = "grid-container_2">
                    <div class = "grid-item_2">Payment Type</div>
                    <div class = "grid-item_2">
                        <form>
                            <input type = "text" id = "ptype" name = "paytype">
                        </form>
                    </div> 
                    <div class = "grid-item_2">Amount of Pay</div>
                    <div class = "grid-item_2">
                        <form>
                            <input type = "text" id = "aopay" name = "amount">
                        </form>
                    </div>
                    <div class = "grid-item_2">Department</div>
                    <div class = "grid-item_2">
                        <form>
                            <input type = "text" id = "dep" name = "department">
                        </form>
                    </div>
                    <div class = "grid-item_2">Comments</div>
                    <div class = "grid-item_2">
                        <form>
                            <textarea rows = "4" cols = "50" name = "comments" >
                            </textarea>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection