@extends('nonacademicsalaries.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Salary Management</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('nonacademicsalaries.create') }}"> Add New Salary Details</a>
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
            <th>Gross Pay(Rs.)</th>
            <th>W.&O.P. (Rs.)</th>
            <th>Insurance (Rs.)</th>
            <th>Stamp (Rs.)</th>
            <th>Welfare (Rs.)</th>
            <th>Total Deductions(Rs.)</th>
            <th>Net Pay(Rs.)</th>

            <th width="280px">Action</th>
        </tr>

        @foreach ($nonacademicsalaries as $nonacademicsalary)
            <?php

            $grosspay= $academicsalary->basic  + $academicsalary->costoflive +  $academicsalary->fest  +  $academicsalary->interim ;
            $deductions = $academicsalary->wop + $academicsalary->insurance + $academicsalary->stamp + $academicsalary->welfare;
            //  dd($grosspay);
            $netsalary = $grosspay - $deductions;

            ?>
            <tr>
                <td>{{ $nonacademicsalary->salaryid }}</td>
                <td>{{ $nonacademicsalary->department }}</td>
                <td>{{ $nonacademicsalary->staffid }}</td>
                <td>{{ $nonacademicsalary->fullname }}</td>
                <td>{{ $nonacademicsalary->paymentdate}}</td>
                <td>{{ $nonacademicsalary->basic }}</td>
                <td>{{ $nonacademicsalary->costoflive }}</td>
                <td>{{ $nonacademicsalary->fest }}</td>
                <td>{{ $nonacademicsalary->interim }}</td>
                <td>{{ $grosspay}}</td>
                <td>{{ $nonacademicsalary->wop }}</td>
                <td>{{ $nonacademicsalary->insurance }}</td>
                <td>{{ $nonacademicsalary->stamp }}</td>
                <td>{{ $nonacademicsalary->welfare }}</td>
                <td>{{ $deductions}}</td>
                <td>{{ $netsalary}}</td>
                <td>
                    <form action="{{ route('nonacademicsalaries.destroy',$nonacademicsalary->salaryid) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('nonacademicsalaries.show',$nonacademicsalary->salaryid) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('nonacademicsalaries.edit',$nonacademicsalary->salaryid) }}">Edit</a>

                        @csrf
                        @method('DELETE')


                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    </div>
    {!! $nonacademicsalaries->links() !!}

@endsection