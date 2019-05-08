@extends('nonleaverequests.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Leave Management</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('nonleaverequests.create') }}"> Create New Leave Request</a>
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
            <th>Leave ID</th>
            <th>Staff ID</th>
            <th>Full Name</th>
            <th>Designation</th>
            <th>Department</th>
            <th>From Date</th>
            <th>To Date</th>
            <th>Type of Leave</th>
            <th>Reason to apply for leave</th>
            <th>Leave Status</th>

            <th width="280px">Action</th>
        </tr>
        @foreach ($nonleaverequests as $nonleaverequest)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $nonleaverequest->staffid }}</td>
                <td>{{ $nonleaverequest->fullname }}</td>
                <td>{{ $nonleaverequest->profession}}</td>
                <td>{{ $nonleaverequest->department }}</td>
                <td>{{ $nonleaverequest->from }}</td>
                <td>{{ $nonleaverequest->to }}</td>
                <td>{{ $nonleaverequest->type }}</td>
                <td>{{ $nonleaverequest->reason }}</td>
                <td>{{ $nonleaverequest->status }}</td>
                <td>
                    <form action="{{ route('nonleaverequests.destroy',$nonleaverequest->leaveid) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('nonleaverequests.show',$nonleaverequest->leaveid) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('nonleaverequests.edit',$nonleaverequest->leaveid) }}">Edit</a>

                        @csrf
                        @method('DELETE')


                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $nonleaverequests->links() !!}

@endsection