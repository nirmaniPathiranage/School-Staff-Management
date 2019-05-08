@extends('nonacademicsalaries.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show All Salary Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('nonacademicsalaries.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Staff ID:</strong>
                {{ $nonacademicsalary->staffid }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Department:</strong>
                {{ $nonacademicsalary->department }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Full Name:</strong>
                {{ $nonacademicsalary->fullname }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date of Payment:</strong>
                {{ $nonacademicsalary->paymentdate }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Basic Salary (Rs.):</strong>
                {{ $nonacademicsalary->basic}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cost of Wage Living (Rs.):</strong>
                {{ $nonacademicsalary->costoflive }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Festival Advance (Rs.):</strong>
                {{ $nonacademicsalary->fest }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>W.&O.P. (Rs.):</strong>
                {{ $nonacademicsalary->wop }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Insurance (Rs.):</strong>
                {{ $nonacademicsalary->insurance }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Stamp (Rs.):</strong>
                {{ $nonacademicsalary->stamp }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Welfare (Rs.):</strong>
                {{ $nonacademicsalary->welfare }}
            </div>
        </div>

    </div>
    </div>
@endsection