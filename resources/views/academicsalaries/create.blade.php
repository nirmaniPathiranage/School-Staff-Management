@extends('academicsalaries.layout')

@section('content')

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2><center><strong>Add New Salary Details</strong></center></h2>
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

    <form action="{{ route('academicsalaries.store') }}" method="POST">
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
                    <font color="blue"><h3><strong>Total Earnings</strong></h3></font>
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
                    <font color="blue"><h3><strong>Total Deductions</strong></h3></font>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Leave Details</strong></h3>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>No. of Leaves Taken for the Month:</strong>
                    <select type="text" name="leavebalance" class="form-control" placeholder="Select leaves taken">
                        <option value="0" @if (Input::old('leavebalance') == '0') selected="selected" @endif>0</option>
                        <option value="1" @if (Input::old('leavebalance') == '1') selected="selected" @endif>1</option>
                        <option value="2" @if (Input::old('leavebalance') == '2') selected="selected" @endif>2</option>
                        <option value="3" @if (Input::old('leavebalance') == '3') selected="selected" @endif>3</option>
                        <option value="4" @if (Input::old('leavebalance') == '4') selected="selected" @endif>4</option>
                        <option value="5" @if (Input::old('leavebalance') == '5') selected="selected" @endif>5</option>
                        <option value="6" @if (Input::old('leavebalance') == '6') selected="selected" @endif>6</option>
                        <option value="7" @if (Input::old('leavebalance') == '7') selected="selected" @endif>7</option>
                        <option value="8" @if (Input::old('leavebalance') == '8') selected="selected" @endif>8</option>
                        <option value="9" @if (Input::old('leavebalance') == '9') selected="selected" @endif>9</option>
                        <option value="10" @if (Input::old('leavebalance') == '10') selected="selected" @endif>10</option>
                        <option value="11" @if (Input::old('leavebalance') == '11') selected="selected" @endif>11</option>
                        <option value="12" @if (Input::old('leavebalance') == '12') selected="selected" @endif>12</option>
                        <option value="13" @if (Input::old('leavebalance') == '13') selected="selected" @endif>13</option>
                        <option value="14" @if (Input::old('leavebalance') == '14') selected="selected" @endif>14</option>
                        <option value="15" @if (Input::old('leavebalance') == '15') selected="selected" @endif>15</option>
                        <option value="16" @if (Input::old('leavebalance') == '16') selected="selected" @endif>16</option>
                        <option value="17" @if (Input::old('leavebalance') == '17') selected="selected" @endif>17</option>
                        <option value="18" @if (Input::old('leavebalance') == '18') selected="selected" @endif>18</option>
                        <option value="19" @if (Input::old('leavebalance') == '19') selected="selected" @endif>19</option>
                        <option value="20" @if (Input::old('leavebalance') == '20') selected="selected" @endif>20</option>
                        <option value="21" @if (Input::old('leavebalance') == '21') selected="selected" @endif>21</option>
                        <option value="22" @if (Input::old('leavebalance') == '22') selected="selected" @endif>22</option>
                        <option value="23" @if (Input::old('leavebalance') == '23') selected="selected" @endif>23</option>
                        <option value="24" @if (Input::old('leavebalance') == '24') selected="selected" @endif>24</option>
                        <option value="25" @if (Input::old('leavebalance') == '25') selected="selected" @endif>25</option>
                        <option value="26" @if (Input::old('leavebalance') == '26') selected="selected" @endif>26</option>
                        <option value="27" @if (Input::old('leavebalance') == '27') selected="selected" @endif>27</option>
                        <option value="28" @if (Input::old('leavebalance') == '28') selected="selected" @endif>28</option>
                        <option value="29" @if (Input::old('leavebalance') == '29') selected="selected" @endif>29</option>
                        <option value="30" @if (Input::old('leavebalance') == '30') selected="selected" @endif>30</option>
                        <option value="31" @if (Input::old('leavebalance') == '31') selected="selected" @endif>31</option>
                    </select>
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