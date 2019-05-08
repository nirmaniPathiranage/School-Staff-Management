@extends('academicsalaries.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-middle">
                <h2><center><strong>Show All Salary Details</strong></center></h2>
            </div>
            <div class="pull-middle">
                <a class="btn btn-primary" href="{{ route('academicsalaries.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Staff ID:</strong>
                {{ $academicsalary->staffid }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Department:</strong>
                {{ $academicsalary->department }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Full Name:</strong>
                {{ $academicsalary->fullname }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date of Payment:</strong>
                {{ $academicsalary->paymentdate }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Basic Salary (Rs.):</strong>
                {{ $academicsalary->basic}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cost of Wage Living (Rs.):</strong>
                {{ $academicsalary->costoflive }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Festival Advance (Rs.):</strong>
                {{ $academicsalary->fest }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No of Leaves Taken for the Month:</strong>
                {{ $academicsalary->leavebalance }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Deduction Per Leave (Rs.):</strong>
                {{ $academicsalary->deductionperleave }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>W.&O.P. (Rs.):</strong>
                {{ $academicsalary->wop }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Insurance (Rs.):</strong>
                {{ $academicsalary->insurance }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Stamp (Rs.):</strong>
                {{ $academicsalary->stamp }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Welfare (Rs.):</strong>
                {{ $academicsalary->welfare }}
            </div>
        </div>

    </div>
    </div>
@endsection