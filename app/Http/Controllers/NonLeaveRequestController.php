<?php

namespace App\Http\Controllers;

use App\NonLeaveRequest;
use Illuminate\Http\Request;

class NonLeaveRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nonleaverequests = NonLeaveRequest::latest()->paginate(5);

        return view('nonleaverequests.index',compact('nonleaverequests'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nonleaverequests.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = request()->validate([

            'staffid' => 'required|string|unique:nonleaverequests,staffid',
            'fullname' => 'required|string|min:2|max:255',
            'profession' => 'required',
            'department' => 'required',
            'from' => 'required|date_format:Y-m-d',
            'to' => 'required|date_format:Y-m-d|after:from',
            'type' => 'required',
            'reason' => 'required|string|max:255',

        ]);


        $input = request()->all();
        $nonleaverequest = NonLeaveRequest::create($input);

        return redirect()->route('nonleaverequests.index')
            ->with('success','Leave request submitted successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NonLeaveRequest  $nonLeaveRequest
     * @return \Illuminate\Http\Response
     */
    public function show(NonLeaveRequest $nonleaverequest)
    {
        return view('nonleaverequests.show',compact('nonleaverequest'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NonLeaveRequest  $nonLeaveRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(NonLeaveRequest $nonleaverequest)
    {
        return view('nonleaverequests.edit',compact('nonleaverequest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NonLeaveRequest  $nonLeaveRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NonLeaveRequest $nonleaverequest)
    {
        request()->validate([

            'staffid' => 'required|string',
            'fullname' => 'required|string|min:2|max:255',
            'profession' => 'required',
            'department' => 'required',
            'from' => 'required|date_format:Y-m-d',
            'to' => 'required|date_format:Y-m-d',
            'type' => 'required',
            'reason' => 'required|string|max:255',
        ]);

        $nonleaverequest->update($request->all());

        return redirect()->route('nonleaverequests.index')
            ->with('success','Leave Request details updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NonLeaveRequest  $nonLeaveRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(NonLeaveRequest $nonleaverequest)
    {
        $nonleaverequest->delete();

        return redirect()->route('nonleaverequests.index')
            ->with('success','Leave Request details deleted successfully');
    }
}
