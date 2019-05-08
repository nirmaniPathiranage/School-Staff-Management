<?php

namespace App\Http\Controllers;

use App\NonAcademicSalary;
use Illuminate\Http\Request;

class NonAcademicSalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nonacademicsalaries = NonAcademicSalary::latest()->paginate(5);

        return view('nonacademicsalaries.index',compact('nonacademicsalaries'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nonacademicsalaries.create');
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

            'staffid' => 'required|string|unique:nonacademicsalaries,staffid',
            'fullname' => 'required|string|min:2|max:255',
            'paymentdate' => 'required|date_format:Y-m-d',
            'basic' => 'required',
            'costoflive' => 'required',
            'fest' => 'required',
            'interim' => 'required',
            'wop' => 'required',
            'insurance' => 'required',
            'stamp' => 'required',
            'welfare' => 'required'
        ]);

        $input = request()->all();
        $nonacademicsalary = NonAcademicSalary::create($input);

        return redirect()->route('nonacademicsalaries.index')
            ->with('success','Salary details added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NonAcademicSalary  $nonAcademicSalary
     * @return \Illuminate\Http\Response
     */
    public function show(NonAcademicSalary $nonacademicsalary)
    {
        return view('nonacademicsalaries.show',compact('nonacademicsalary'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NonAcademicSalary  $nonAcademicSalary
     * @return \Illuminate\Http\Response
     */
    public function edit(NonAcademicSalary $nonacademicsalary)
    {
        return view('nonacademicsalaries.edit',compact('nonacademicsalary'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NonAcademicSalary  $nonAcademicSalary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NonAcademicSalary $nonacademicsalary)
    {
        request()->validate([

            'staffid' => 'required|string',
            'fullname' => 'required|string|min:2|max:255',
            'paymentdate' => 'required|date_format:Y-m-d',
            'basic' => 'required',
            'costoflive' => 'required',
            'fest' => 'required',
            'interim' => 'required',
            'wop' => 'required',
            'insurance' => 'required',
            'stamp' => 'required',
            'welfare' => 'required'
        ]);

        $nonacademicsalary->update($request->all());

        return redirect()->route('nonacademicsalaries.index')
            ->with('success','Salary details updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NonAcademicSalary  $nonAcademicSalary
     * @return \Illuminate\Http\Response
     */
    public function destroy(NonAcademicSalary $nonacademicsalary)
    {
        $nonacademicsalary->delete();

        return redirect()->route('nonacademicsalaries.index')
            ->with('success','Salary details deleted successfully');
    }
}
