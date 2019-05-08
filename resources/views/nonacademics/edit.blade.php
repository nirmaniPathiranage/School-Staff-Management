@extends('nonacademics.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Non-Academic Staff Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('nonacademics.index') }}"> Back</a>
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

    <form action="{{ route('nonacademics.update',$nonacademic->staffid) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Staff ID:</strong>
                    <input type="text" name="staffid" value="{{$nonacademic->staffid}}"  class="form-control" placeholder="Enter Staff ID">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Full Name:</strong>
                    <input type="text" name="fullname" value="{{ $nonacademic->fullname }}" class="form-control" placeholder="Enter Full Name">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date of Birth:</strong>
                    <input type="date" name="dob" value="{{ $nonacademic->dob }}" class="form-control" placeholder="Select your date of birth" >
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Gender:</strong>
                    <input type="radio" name="gender" value="Male" class="form-control" {{ $nonacademic->gender == 'Male' ? 'Checked' :''}}>Male<br>
                    <input type="radio" name="gender" value="Female" class="form-control"{{ $nonacademic->gender == 'Female' ? 'Checked' :''}}>Female<br>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>NIC:</strong>
                    <input type="text" name="nic" value="{{ $nonacademic->nic }}" class="form-control" placeholder="XXXXXXXXXV">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Permanant Address:</strong>
                    <textarea class="form-control" style="height:150px" name="paddress" placeholder="Enter Permanant address">{{ $nonacademic->paddress }}</textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Current Address:</strong>
                    <textarea class="form-control" style="height:150px" name="caddress" placeholder="Enter Current address">{{ $nonacademic->caddress }}</textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Contact No:</strong>
                    <input type="text" name="contact" value="{{ $nonacademic->contact }}"  class="form-control" placeholder="Enter contact no">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email Address:</strong>
                    <input type="email" name="email" value="{{ $nonacademic->email }}"  class="form-control" placeholder="Enter Email address">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Designation:</strong>
                    <select type="text" name="profession" class="form-control" placeholder="Select your profession">
                        <option value = "Clerical Clerk" @if($nonacademic->profession=="Clerical Clerk") selected @endif>Clerical Clerk</option>
                        <option value = "Accountant" @if($nonacademic->profession=="Accountant") selected @endif>Accountant</option>
                        <option value = "Inventory Manager" @if($nonacademic->profession=="Inventory Manager") selected @endif>Inventory Manager</option>
                        <option value = "Sales Manager" @if($nonacademic->profession=="Sales Manager") selected @endif>Sales Manager</option>
                        <option value = "Canteen Manager" @if($nonacademic->profession=="Canteen Manager") selected @endif>Canteen Manager</option>
                        <option value = "Bookshop Manager" @if($nonacademic->profession=="Bookshop Manager") selected @endif>Bookshop Manager</option>
                        <option value = "Librarian" @if($nonacademic->profession=="Librarian") selected @endif>Librarian</option>
                        <option value = "Lab Assistant" @if($nonacademic->profession=="Lab Assistant") selected @endif>Lab Assistant</option>
                        <option value = "Security Officer" @if($nonacademic->profession=="Security Officer") selected @endif>Security Officer</option>
                        <option value = "Cleaner" @if($nonacademic->profession=="Cleaner") selected @endif>Cleaner</option>
                        <option value = "Worker" @if($nonacademic->profession=="Worker") selected @endif>Worker</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Qualifications:</strong>
                    <textarea class="form-control" style="height:150px" name="qualifications" placeholder="Enter your qualifications">{{ $nonacademic->qualifications }}</textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Experience:</strong>
                    <input type="text" name="experience" value="{{ $nonacademic->experience }}" class="form-control" placeholder="Enter experience in years">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Departmant:</strong>
                    <select type="text" name="department" class="form-control" placeholder="Select your department">
                        <option value = "School Head Office" @if($nonacademic->department=="School Head Office") selected @endif>School Head Office</option>
                        <option value = "Finance Department" @if($nonacademic->department=="Finance Department") selected @endif>Finance Department</option>
                        <option value = "Inventory Department" @if($nonacademic->department=="Inventory Department") selected @endif>Inventory Department</option>
                        <option value = "Sales Department" @if($nonacademic->department=="Sales Department") selected @endif>Sales Department</option>
                        <option value = "Canteen" @if($nonacademic->department=="Canteen") selected @endif>Canteen</option>
                        <option value = "Bookshop" @if($nonacademic->department=="Bookshop") selected @endif>Bookshop</option>
                        <option value = "Library" @if($nonacademic->department=="Library") selected @endif>Library</option>
                        <option value = "Lab" @if($nonacademic->department=="Lab") selected @endif>Lab</option>
                        <option value = "Security Department" @if($nonacademic->department=="Security Department") selected @endif>Security Department</option>
                        <option value = "Cleaning Department" @if($nonacademic->department=="Cleaning Department") selected @endif>Cleaning Department</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Username:</strong>
                    <input type="text" name="username" value="{{ $nonacademic->username }}" class="form-control" placeholder="Enter a username">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Password:</strong>
                    <input type="password" name="passsword" value="{{ $nonacademic->passsword }}" class="form-control" placeholder="Enter a valid password">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Confirm Password:</strong>
                    <input type="password" name="confirmpassword" value="{{ $nonacademic->confirmpassword }}" class="form-control" placeholder="Confirm your password">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Registered Date:</strong>
                    <input type="date" name="regdate" value="{{ $nonacademic->regdate}}" class="form-control" placeholder="dd/MM/yyyy">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>

    </form>
    </div>
@endsection