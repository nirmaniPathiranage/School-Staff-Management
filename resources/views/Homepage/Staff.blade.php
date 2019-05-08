@extends('Homepage.layout')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="background-color: #0e8033 ; height: 450px">
                {{--<img src="{{asset('images/event1.jpg')}}">--}}
                <div class="col-md-12" style=" color: whitesmoke">
                     <h1 class="text-center" style="padding: 10px">Academic and Non-Academic Staff Management</h1>
                </div>

                <br><br><br><br>
                
                <div class="row container-fluid" style="padding-top: 0px;">


                    <div class="col-md-4">
                        <div class="card">
                            <h5 class="card-header">
                                Staff
                            </h5>
                            <div class="card-body">
                                <p class="card-text">
                                    <img src="{{asset('images/staff.png')}}" style="width: 240px; height: 174px" >
                                </p>
                            </div>
                            <div class="card-footer">
                                <button type="button" class="btn-outline-primary" onclick="window.location='{{ route("academics.create") }}'"> Enter</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <h5 class="card-header">
                                Leave
                            </h5>
                            <div class="card-body">
                                <p class="card-text">
                                    <img src="{{asset('images/leave.jpg')}}" style="width: 240px; height: 174px">
                                </p>
                            </div>
                            <div class="card-footer">
                                <button type="button" class="btn-outline-primary" onclick="window.location='{{ route("leaverequests.create") }}'"> Enter</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <h5 class="card-header">
                                Salary
                            </h5>
                            <div class="card-body">
                                <p class="card-text">
                                    <img src="{{asset('images/salary.png')}}" style="width: 240px; height: 174px" >
                                </p>
                            </div>
                            <div class="card-footer">
                                <button type="button" class="btn-outline-primary" onclick="window.location='{{ route("academicsalaries.create") }}'"> Enter</button>
                            </div>
                        </div>
                    </div>

                </div>
                <br><br><br>
            </div>
        </div>
    </div>

@endsection