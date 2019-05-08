@extends('academicsalaries.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-middle">
                <h2><center><strong>Edit Salary Details</strong></center></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('academicsalaries.index') }}"> Back</a>
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

    <form action="{{ route('academicsalaries.update',$academicsalary->salaryid) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Staff ID:</strong>
                    <input type="text" name="staffid" value="{{$academicsalary->staffid}}"  class="form-control" placeholder="Enter Staff ID">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Full Name:</strong>
                    <input type="text" name="fullname" value="{{ $academicsalary->fullname }}" class="form-control" placeholder="Enter Full Name">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date of Payment:</strong>
                    <input type="date" name="paymentdate" value="{{ $academicsalary->paymentdate }}" class="form-control" placeholder="Select your date of payment" >
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
                    <input type="text" name="basic" value="{{ $academicsalary->basic }}" class="form-control" placeholder="Enter the basic salary">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Cost of Wage Living (Rs.):</strong>
                    <input type="text" name="costoflive" value="{{ $academicsalary->costoflive }}"  class="form-control" placeholder="Enter cost of living">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Festival Advance: (Rs.)</strong>
                    <input type="text" name="fest" value="{{ $academicsalary->fest }}"  class="form-control" placeholder="Enter festival advance">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Interim (Rs.):</strong>
                    <input type="text" name="interim" value="{{ $academicsalary->interim }}" class="form-control" placeholder="Enter interim">
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
                    <strong>No of Leaves Taken for the Month:</strong>
                    <select type="text" name="leavebalance" class="form-control" placeholder="Select leaves taken">
                        <option value = "0" @if($academicsalary->leavebalance=="0") selected @endif >0</option>
                        <option value = "1" @if($academicsalary->leavebalance=="1") selected @endif >1</option>
                        <option value = "2" @if($academicsalary->leavebalance=="2") selected @endif>2</option>
                        <option value = "3" @if($academicsalary->leavebalance=="3") selected @endif>3</option>
                        <option value = "4" @if($academicsalary->leavebalance=="4") selected @endif>4</option>
                        <option value = "5" @if($academicsalary->leavebalance=="5") selected @endif >5</option>
                        <option value = "6" @if($academicsalary->leavebalance=="6") selected @endif>6</option>
                        <option value = "7" @if($academicsalary->leavebalance=="7") selected @endif>7</option>
                        <option value = "8" @if($academicsalary->leavebalance=="8") selected @endif>8</option>
                        <option value = "9" @if($academicsalary->leavebalance=="9") selected @endif >9</option>
                        <option value = "10" @if($academicsalary->leavebalance=="10") selected @endif>10</option>
                        <option value = "11" @if($academicsalary->leavebalance=="11") selected @endif>11</option>
                        <option value = "12" @if($academicsalary->leavebalance=="12") selected @endif>12</option>
                        <option value = "13" @if($academicsalary->leavebalance=="13") selected @endif >13</option>
                        <option value = "14" @if($academicsalary->leavebalance=="14") selected @endif>14</option>
                        <option value = "15" @if($academicsalary->leavebalance=="15") selected @endif>15</option>
                        <option value = "16" @if($academicsalary->leavebalance=="16") selected @endif>16</option>
                        <option value = "17" @if($academicsalary->leavebalance=="17") selected @endif >17</option>
                        <option value = "18" @if($academicsalary->leavebalance=="18") selected @endif>18</option>
                        <option value = "19" @if($academicsalary->leavebalance=="19") selected @endif>19</option>
                        <option value = "20" @if($academicsalary->leavebalance=="20") selected @endif>20</option>
                        <option value = "21" @if($academicsalary->leavebalance=="21") selected @endif >21</option>
                        <option value = "22" @if($academicsalary->leavebalance=="22") selected @endif>22</option>
                        <option value = "23" @if($academicsalary->leavebalance=="23") selected @endif>23</option>
                        <option value = "24" @if($academicsalary->leavebalance=="24") selected @endif>24</option>
                        <option value = "25" @if($academicsalary->leavebalance=="25") selected @endif >25</option>
                        <option value = "26" @if($academicsalary->leavebalance=="26") selected @endif>26</option>
                        <option value = "27" @if($academicsalary->leavebalance=="27") selected @endif>27</option>
                        <option value = "28" @if($academicsalary->leavebalance=="28") selected @endif>28</option>
                        <option value = "29" @if($academicsalary->leavebalance=="29") selected @endif >29</option>
                        <option value = "30" @if($academicsalary->leavebalance=="30") selected @endif>30</option>
                        <option value = "31" @if($academicsalary->leavebalance=="31") selected @endif>31</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>W & O.P. (Rs.):</strong>
                    <input type="text" name="wop" value="{{ $academicsalary->wop }}" class="form-control" placeholder="Enter wop">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Insurance (Rs.):</strong>
                    <input type="text" name="insurance" value="{{ $academicsalary->insurance }}" class="form-control" placeholder="Enter insurance">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Stamp (Rs.):</strong>
                    <input type="text" name="stamp" value="{{ $academicsalary->stamp }}" class="form-control" placeholder="Enter stamp">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Welfare (Rs.):</strong>
                    <input type="text" name="welfare" value="{{ $academicsalary->welfare}}" class="form-control" placeholder="Enter welfare">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>

    </form>
    </div>
@endsection