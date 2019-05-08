@extends('nonacademicsalaries.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Salary Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('nonacademicsalaries.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('nonacademicsalaries.update',$nonacademicsalary->salaryid) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Staff ID:</strong>
                    <input type="text" name="staffid" value="{{$nonacademicsalary->staffid}}"  class="form-control" placeholder="Enter Staff ID">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Full Name:</strong>
                    <input type="text" name="fullname" value="{{ $nonacademicsalary->fullname }}" class="form-control" placeholder="Enter Full Name">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date of Payment:</strong>
                    <input type="date" name="paymentdate" value="{{ $nonacademicsalary->paymentdate }}" class="form-control" placeholder="Select your date of payment" >
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Total Earnings:</strong>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Basic Salary (Rs.):</strong>
                    <input type="text" name="basic" value="{{ $nonacademicsalary->basic }}" class="form-control" placeholder="Enter the basic salary">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Cost of Wage Living (Rs.):</strong>
                    <input type="text" name="costoflive" value="{{ $nonacademicsalary->costoflive }}"  class="form-control" placeholder="Enter cost of living">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Festival Advance: (Rs.)</strong>
                    <input type="text" name="fest" value="{{ $nonacademicsalary->fest }}"  class="form-control" placeholder="Enter festival advance">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Interim (Rs.):</strong>
                    <input type="text" name="interim" value="{{ $nonacademicsalary->interim }}" class="form-control" placeholder="Enter interim">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Total Deductions:</strong>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>W & O.P. (Rs.):</strong>
                    <input type="text" name="wop" value="{{ $nonacademicsalary->wop }}" class="form-control" placeholder="Enter wop">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Insurance (Rs.):</strong>
                    <input type="text" name="insurance" value="{{ $nonacademicsalary->insurance }}" class="form-control" placeholder="Enter insurance">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Stamp (Rs.):</strong>
                    <input type="text" name="stamp" value="{{ $nonacademicsalary->stamp }}" class="form-control" placeholder="Enter stamp">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Welfare (Rs.):</strong>
                    <input type="text" name="welfare" value="{{ $nonacademicsalary->welfare}}" class="form-control" placeholder="Enter welfare">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>

    </form>
    </div>
@endsection