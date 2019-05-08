<?php

namespace App\Http\Controllers;

use App\AcademicSalary;
use Illuminate\Http\Request;

class AcademicSalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $academicsalaries = AcademicSalary::latest()->paginate(5);

        return view('academicsalaries.index',compact('academicsalaries'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('academicsalaries.create');
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

            'staffid' => 'required|string|unique:academicsalaries,staffid',
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
        $academicsalary = AcademicSalary::create($input);

        return redirect()->route('academicsalaries.index')
            ->with('success','Salary details added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AcademicSalary  $academicSalary
     * @return \Illuminate\Http\Response
     */
    public function show(AcademicSalary $academicsalary)
    {
        return view('academicsalaries.show',compact('academicsalary'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AcademicSalary  $academicSalary
     * @return \Illuminate\Http\Response
     */
    public function edit(AcademicSalary $academicsalary)
    {
        return view('academicsalaries.edit',compact('academicsalary'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AcademicSalary  $academicSalary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AcademicSalary $academicsalary)
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

        $academicsalary->update($request->all());

        return redirect()->route('academicsalaries.index')
            ->with('success','Salary details updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AcademicSalary  $academicSalary
     * @return \Illuminate\Http\Response
     */
    public function destroy(AcademicSalary $academicsalary)
    {
        $academicsalary->delete();

        return redirect()->route('academicsalaries.index')
            ->with('success','Salary details deleted successfully');
    }
}
