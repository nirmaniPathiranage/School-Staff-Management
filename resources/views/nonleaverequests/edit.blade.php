@extends('nonleaverequests.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Leave Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('nonleaverequests.index') }}"> Back</a>
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

    <form action="{{ route('nonleaverequests.update',$nonleaverequest->leaveid) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Staff ID:</strong>
                    <input type="text" name="staffid" value="{{$nonleaverequest->staffid}}"  class="form-control" placeholder="Enter Staff ID">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Full Name:</strong>
                    <input type="text" name="fullname" value="{{ $nonleaverequest->fullname }}" class="form-control" placeholder="Enter Full Name">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Designation:</strong>
                    <select type="text" name="profession" class="form-control" placeholder="Select your designation">
                        <option value = "Clerical Clerk" @if($nonleaverequest->profession=="Clerical Clerk") selected @endif>Clerical Clerk</option>
                        <option value = "Accountant" @if($nonleaverequest->profession=="Accountant") selected @endif>Accountant</option>
                        <option value = "Inventory Manager" @if($nonleaverequest->profession=="Inventory Manager") selected @endif>Inventory Manager</option>
                        <option value = "Sales Manager" @if($nonleaverequest->profession=="Sales Manager") selected @endif>Sales Manager</option>
                        <option value = "Canteen Manager" @if($nonleaverequest->profession=="Canteen Manager") selected @endif>Canteen Manager</option>
                        <option value = "Bookshop Manager" @if($nonleaverequest->profession=="Bookshop Manager") selected @endif>Bookshop Manager</option>
                        <option value = "Librarian" @if($nonleaverequest->profession=="Librarian") selected @endif>Librarian</option>
                        <option value = "Lab Assistant" @if($nonleaverequest->profession=="Lab Assistant") selected @endif>Lab Assistant</option>
                        <option value = "Security Officer" @if($nonleaverequest->profession=="Security Officer") selected @endif>Security Officer</option>
                        <option value = "Cleaner" @if($nonleaverequest->profession=="Cleaner") selected @endif>Cleaner</option>
                        <option value = "Worker" @if($nonleaverequest->profession=="Worker") selected @endif>Worker</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Departmant:</strong>
                    <select type="text" name="department" class="form-control" placeholder="Select your department">
                        <option value = "School Head Office" @if($nonleaverequest->department=="School Head Office") selected @endif>School Head Office</option>
                        <option value = "Finance Department" @if($nonleaverequest->department=="Finance Department") selected @endif>Finance Department</option>
                        <option value = "Inventory Department" @if($nonleaverequest->department=="Inventory Department") selected @endif>Inventory Department</option>
                        <option value = "Sales Department" @if($nonleaverequest->department=="Sales Department") selected @endif>Sales Department</option>
                        <option value = "Canteen" @if($nonleaverequest->department=="Canteen") selected @endif>Canteen</option>
                        <option value = "Bookshop" @if($nonleaverequest->department=="Bookshop") selected @endif>Bookshop</option>
                        <option value = "Library" @if($nonleaverequest->department=="Library") selected @endif>Library</option>
                        <option value = "Lab" @if($nonleaverequest->department=="Lab") selected @endif>Lab</option>
                        <option value = "Security Department" @if($nonleaverequest->department=="Security Department") selected @endif>Security Department</option>
                        <option value = "Cleaning Department" @if($nonleaverequest->department=="Cleaning Department") selected @endif>Cleaning Department</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Duration:</strong>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>From Date:</strong>
                    <input type="date" name="from" value="{{ $nonleaverequest->from }}" class="form-control" placeholder="Select your from date" >
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>To Date:</strong>
                    <input type="date" name="to" value="{{ $nonleaverequest->to }}" class="form-control" placeholder="Select your to date" >
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Type of Leave:</strong>
                    <select type="text" name="type" class="form-control" placeholder="Select your type of leave">
                        <option value="Casual" @if ($nonleaverequest->type=="Casual") selected @endif>Casual</option>
                        <option value="Sick" @if ($nonleaverequest->type=="Sick") selected @endif>Sick</option>
                        <option value="Maternity" @if($nonleaverequest->type=="Maternity") selected @endif>Maternity</option>
                        <option value="Paternity" @if($nonleaverequest->type=="Paternity") selected @endif>Paternity</option>
                        <option value="Bereavement" @if ($nonleaverequest->type=="Bereavement") selected @endif>Bereavement</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Reason to apply for leave:</strong>
                    <textarea class="form-control" style="height:150px" name="reason" placeholder="Enter reason to apply for leave">{{ $nonleaverequest->reason}}</textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>

    </form>

@endsection