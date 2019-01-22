<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicant_Info;

class AdminController extends Controller
{
    public function Applicants()
    {
        $students = Applicant_Info::all();
        return view('admin',compact('students'));
    }
    public function destroy($id)
    {
        $student = Applicant_Info::find($id);

        if ($student->delete())
        {
                return redirect()
                    ->route('applicant-list')
                    ->with('status', 'success')
                    ->with('message', 'Student Deleted Successfully!');
        }
    }
    public function search()
    {
        return view('search');
    }
}
