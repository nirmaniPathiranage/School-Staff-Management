@extends('academics.layout')

@section('content')
    <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-middle">
                    <h2><center><strong>Add New Academic Staff Member</strong></center></h2>
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

    <form action="{{ route('academics.store') }}" method="POST">
        @csrf

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <font color="blue"><h3><strong>Personal Details</strong></h3></font>
                </div>
            </div>

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
                    <strong>Date of Birth:</strong>
                    <input type="date" name="dob" class="form-control" value="{{ old('dob') }}" placeholder="Select the date of birth" >
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Gender:</strong>
                    <input type="radio" name="gender" class="form-control" value="Male" {{ (old('gender') == 'Male') ? 'checked' : '' }}> Male<br>
                    <input type="radio" name="gender" class="form-control" value="Female" {{ (old('gender') == 'Female') ? 'checked' : '' }}>Female<br>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>NIC:</strong>
                    <input type="text" name="nic" class="form-control" value="{{ old('nic') }}" placeholder="XXXXXXXXXV">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Permanant Address:</strong>
                    <textarea class="form-control" style="height:150px" name="paddress" placeholder="Enter Permanant address">{{ Input::old('paddress') }}
</textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Current Address:</strong>
                    <textarea class="form-control" style="height:150px" name="caddress" placeholder="Enter Current address">{{ Input::old('caddress') }}
</textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Contact No:</strong>
                    <input type="text" name="contact" class="form-control" value="{{ old('contact') }}" placeholder="Enter contact no">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email Address:</strong>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}"  placeholder="Enter Email address">
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
                        <option value="Principal" @if (Input::old('profession') == 'Principal') selected="selected" @endif>Principal</option>
                        <option value="Secretary" @if (Input::old('profession') == 'Secretary') selected="selected" @endif>Secretary</option>
                        <option value="Vice Principal" @if (Input::old('profession') == 'Vice Principal') selected="selected" @endif>Vice Principal</option>
                        <option value="Sectional Head" @if (Input::old('profession') == 'Sectional Head') selected="selected" @endif>Sectional Head</option>
                        <option value="Teacher" @if (Input::old('profession') == 'Teacher') selected="selected" @endif>Teacher</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Qualifications:</strong>
                    <textarea class="form-control" style="height:150px" name="qualifications" placeholder="Enter your qualifications">{{ Input::old('qualifications') }}
</textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Experience(in years):</strong>
                    <input type="text" name="experience" class="form-control" value="{{ old('experience') }}" placeholder="Enter experience in years">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Departmant:</strong>
                    <select type="text" name="department" class="form-control" placeholder="Select your department">
                        <option value="School Head Office" @if (Input::old('department') == 'School Head Office') selected="selected" @endif>School Head Office</option>
                        <option value="English" @if (Input::old('department') == 'English') selected="selected" @endif>English</option>
                        <option value="Mathematics" @if (Input::old('department') == 'Mathematics') selected="selected" @endif>Mathematics</option>
                        <option value="Science" @if (Input::old('department') == 'Science') selected="selected" @endif>Science</option>
                        <option value="IT" @if (Input::old('department') == 'IT') selected="selected" @endif>IT</option>
                        <option value="Aesthetics" @if (Input::old('department') == 'Aesthetics') selected="selected" @endif>Aesthetics</option>
                        <option value="Home Science" @if (Input::old('department') == 'Home Science') selected="selected" @endif>Home Science</option>
                        <option value="Sinhala" @if (Input::old('department') == 'Sinhala') selected="selected" @endif>Sinhala</option>
                        <option value="Buddhism" @if (Input::old('department') == 'Buddhism') selected="selected" @endif>Buddhism</option>
                        <option value="PTS" @if (Input::old('department') == 'PTS') selected="selected" @endif>PTS</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <h3><font color="blue"><strong>Login Details</strong></font></h3>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Username:</strong>
                    <input type="text" name="username" class="form-control" value="{{ old('username') }}" placeholder="Enter a username">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Password:</strong>
                    <input type="password" name="passsword" class="form-control" value="{{ old('passsword') }}" placeholder="Enter a valid password">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Confirm Password:</strong>
                    <input type="password" name="confirmpassword" class="form-control" value="{{ old('confirmpassword') }}" placeholder="Confirm your password">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Registered Date:</strong>
                    <input type="date" name="regdate" class="form-control" value="{{ old('regdate') }}" placeholder="dd/MM/yyyy">
                </div>
            </div>
        </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
    </form>
    </div>
@endsection