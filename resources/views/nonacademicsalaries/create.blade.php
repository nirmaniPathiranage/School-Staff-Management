@extends('nonacademicsalaries.layout')

@section('content')

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                  <h2><center>Add New Salary Details</center></h2>
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

    <form action="{{ route('nonacademicsalaries.store') }}" method="POST">
        @csrf

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Staff ID:</strong>
                    <input type="text" name="staffid" class="form-control" value="{{ old('staffid') }}" placeholder="Enter Staff ID">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Full Name:</strong>
                    <input type="text" name="fullname" class="form-control" value="{{ old('fullname') }}" placeholder="Enter Full Name">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date of Payment:</strong>
                    <input type="date" name="paymentdate" class="form-control" value="{{ old('paymentdate') }}" placeholder="Select the date of payment" >
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
                    <input type="text" name="basic" class="form-control" value="{{ old('basic') }}" placeholder="Enter basic salary">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Cost of Wage Living (Rs.):</strong>
                    <input type="text" name="costoflive" class="form-control" value="{{ old('costoflive') }}" placeholder="Enter cost of live">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Festival Advance (Rs.):</strong>
                    <input type="text" name="fest" class="form-control" value="{{ old('fest') }}"  placeholder="Enter festival advance">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Interim All (Rs.):</strong>
                    <input type="text" name="interim" class="form-control" value="{{ old('interim') }}" placeholder="Enter the interim">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Total Deductions:</strong>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>W.&O.P. (Rs.):</strong>
                    <input type="text" name="wop" class="form-control" value="{{ old('wop') }}" placeholder="Enter wop">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Insurance (Rs.):</strong>
                    <input type="text" name="insurance" class="form-control" value="{{ old('insurance') }}" placeholder="Enter insurance">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Stamp (Rs.):</strong>
                    <input type="text" name="stamp" class="form-control" value="{{ old('stamp') }}" placeholder="Enter stamp">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Welfare (Rs.):</strong>
                    <input type="text" name="welfare" class="form-control" value="{{ old('welfare') }}" placeholder="Enter welfare">
                </div>
            </div>
        </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
    </form>
    </div>
@endsection