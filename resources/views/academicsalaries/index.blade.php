@extends('academicsalaries.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-middle">
                <h2><center><strong>Salary Management</strong></center></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('academicsalaries.create') }}"> Add New Salary Details</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Salary ID</th>
            <th>Department</th>
            <th>Staff ID</th>
            <th>Full Name</th>
            <th>Date of Payment</th>
            <th>Basic Salary (Rs.)</th>
            <th>Cost of Wage Living (Rs.)</th>
            <th>Festival Advance (Rs.)</th>
            <th>Interim All (Rs.)</th>
            <th>Gross Pay (Rs.)</th>
            <th>No of Leaves Taken for the Month</th>
            <th>Deduction Per Leave (Rs.)</th>
            <th>Total Leave Deduction (Rs.)</th>
            <th>W.&O.P. (Rs.)</th>
            <th>Insurance (Rs.)</th>
            <th>Stamp (Rs.)</th>
            <th>Welfare (Rs.)</th>
            <th>Total Deductions (Rs.)</th>
            <th>Net Pay (Rs.)</th>

            <th width="280px">Action</th>
        </tr>


        @foreach ($academicsalaries as $academicsalary)
            <?php

            $grosspay= $academicsalary->basic  + $academicsalary->costoflive +  $academicsalary->fest  +  $academicsalary->interim ;
            $leavedeductions = $academicsalary->leavebalance * $academicsalary->deductionperleave ;
            $deductions = $academicsalary->wop + $academicsalary->insurance + $academicsalary->stamp + $academicsalary->welfare + $leavedeductions;
          //  dd($grosspay);
            $netsalary = $grosspay - $deductions;

            ?>

            <tr>
                <td>{{ $academicsalary->salaryid }}</td>
                <td>{{ $academicsalary->department }}</td>
                <td>{{ $academicsalary->staffid }}</td>
                <td>{{ $academicsalary->fullname }}</td>
                <td>{{ $academicsalary->paymentdate}}</td>
                <td>{{ $academicsalary->basic }}</td>
                <td>{{ $academicsalary->costoflive }}</td>
                <td>{{ $academicsalary->fest }}</td>
                <td>{{ $academicsalary->interim }}</td>
                <td>{{ $grosspay}}</td>
                <td>{{ $academicsalary->leavebalance }}</td>
                <td>{{ $academicsalary->deductionperleave }}</td>
                <td>{{ $leavedeductions}}</td>
                <td>{{ $academicsalary->wop }}</td>
                <td>{{ $academicsalary->insurance }}</td>
                <td>{{ $academicsalary->stamp }}</td>
                <td>{{ $academicsalary->welfare }}</td>
                <td>{{ $deductions}}</td>
                <td>{{ $netsalary}}</td>


                <td>
                    <form action="{{ route('academicsalaries.destroy',$academicsalary->salaryid) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('academicsalaries.show',$academicsalary->salaryid) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('academicsalaries.edit',$academicsalary->salaryid) }}">Edit</a>

                        @csrf
                        @method('DELETE')


                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    </div>
   {!! $academicsalaries->links() !!}

@endsection