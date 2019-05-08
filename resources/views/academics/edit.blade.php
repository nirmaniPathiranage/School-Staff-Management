@extends('academics.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-middle">
                <h2><center><strong>Edit Academic Staff Details</strong></center></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('academics.index') }}"> Back</a>
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

    <form action="{{ route('academics.update',$academic->staffid) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <font color="blue"><h3><strong>Personal Details</strong></h3></font>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Staff ID:</strong>
                    <input type="text" name="staffid" value="{{$academic->staffid}}"  class="form-control" placeholder="Enter Staff ID">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Full Name:</strong>
                    <input type="text" name="fullname" value="{{ $academic->fullname }}" class="form-control" placeholder="Enter Full Name">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date of Birth:</strong>
                    <input type="date" name="dob" value="{{ $academic->dob }}" class="form-control" placeholder="Select your date of birth" >
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Gender:</strong>
                    <input type="radio" name="gender" value="Male" class="form-control" {{ $academic->gender == 'Male' ? 'Checked' :''}}>Male<br>
                    <input type="radio" name="gender" value="Female" class="form-control"{{ $academic->gender == 'Female' ? 'Checked' :''}}>Female<br>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>NIC:</strong>
                    <input type="text" name="nic" value="{{ $academic->nic }}" class="form-control" placeholder="XXXXXXXXXV">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Permanant Address:</strong>
                    <textarea class="form-control" style="height:150px" name="paddress" placeholder="Enter Permanant address">{{ $academic->paddress }}</textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Current Address:</strong>
                    <textarea class="form-control" style="height:150px" name="caddress" placeholder="Enter Current address">{{ $academic->caddress }}</textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Contact No:</strong>
                    <input type="text" name="contact" value="{{ $academic->contact }}"  class="form-control" placeholder="Enter contact no">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email Address:</strong>
                    <input type="email" name="email" value="{{ $academic->email }}"  class="form-control" placeholder="Enter Email address">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <font color="blue"><h3><strong>Professional Details</strong></h3></font>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Designation:</strong>
                    <select type="text" name="profession" class="form-control" placeholder="Select your profession">
                        <option value = "Principal" @if($academic->profession=="Principal") selected @endif>Principal</option>
                        <option value = "Vice Principal" @if($academic->profession=="Vice Principal") selected @endif>Vice Principal</option>
                        <option value = "Secretory" @if($academic->profession=="Secretory") selected @endif>Secretory</option>
                        <option value = "Sectional Head" @if($academic->profession=="Sectional Head") selected @endif>Sectional Head</option>
                        <option value = "Teacher" @if($academic->profession=="Teacher") selected @endif>Teacher</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Qualifications:</strong>
                    <textarea class="form-control" style="height:150px" name="qualifications" placeholder="Enter your qualifications">{{ $academic->qualifications }}</textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Experience:</strong>
                    <input type="text" name="experience" value="{{ $academic->experience }}" class="form-control" placeholder="Enter experience in years">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Departmant:</strong>
                    <select type="text" name="department" class="form-control" placeholder="Select your department">
                        <option value = "School Head Office" @if($academic->department=="School Head Office") selected @endif>School Head Office</option>
                        <option value = "English" @if($academic->department=="English") selected @endif>English</option>
                        <option value = "Mathematics" @if($academic->department=="Mathematics") selected @endif>Mathematics</option>
                        <option value = "Science" @if($academic->department=="Science") selected @endif>Science</option>
                        <option value = "IT" @if($academic->department=="IT") selected @endif>IT</option>
                        <option value = "Aesthetics" @if($academic->department=="Aesthetics") selected @endif>Aesthetics</option>
                        <option value = "Home Science" @if($academic->department=="Home Science") selected @endif>Home Science</option>
                        <option value = "Sinhala" @if($academic->department=="Sinhala") selected @endif>Sinhala</option>
                        <option value = "Buddhism" @if($academic->department=="Buddhism") selected @endif>Buddhism</option>
                        <option value = "PTS" @if($academic->department=="PTS") selected @endif>PTS</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <font color="blue"><h3><strong>Login Details</strong></h3></font>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Username:</strong>
                    <input type="text" name="username" value="{{ $academic->username }}" class="form-control" placeholder="Enter a username">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Password:</strong>
                    <input type="password" name="passsword" value="{{ $academic->passsword }}" class="form-control" placeholder="Enter a valid password">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Confirm Password:</strong>
                    <input type="password" name="confirmpassword" value="{{ $academic->confirmpassword }}" class="form-control" placeholder="Confirm your password">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Registered Date:</strong>
                    <input type="date" name="regdate" value="{{ $academic->regdate}}" class="form-control" placeholder="dd/MM/yyyy">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>

    </form>
    </div>
@endsection