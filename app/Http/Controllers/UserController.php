<?php

namespace App\Http\Controllers;

use File;
use DB;
use Illuminate\Http\Request;
use App\Applicant_Info;

class UserController extends Controller
{

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'father_name'  => 'required',
            'mother_name' => 'required',
            'local_guardian_name' => 'required',
            'present_address' => 'required',
            'permanent_address' => 'required',
            'date_of_birth' => 'required',
            'nationality' => 'required',
            'ssc_passing_year' => 'required',
            'ssc_board' => 'required',
            'ssc_cgpa' => 'required',
            'ssc_class' => 'required',
            'hsc_passing_year' => 'required',
            'hsc_board' => 'required',
            'hsc_cgpa' => 'required',
            'hsc_class' => 'required',
            'bsc_passing_year' => 'required',
            'bsc_university' => 'required',
            'bsc_cgpa' => 'required',
            'bsc_class' => 'required',
            'emergency_contact' => 'required|min:11|max:11',
            'email' => 'required',
            'bkash_transaction_no' => 'required',
            'picture' => 'required',
            'signature' => 'required'

        ]);

        $data = $request->all();

        // Image Upload...
        if($request->file('picture'))
        {
            $file = $request->file('picture');

            $ext = $file->getClientOriginalExtension();

            $token = sha1(time());

            $prefix = 'picture';

            $name = $prefix.'_'.$token.'.'.$ext;

            $path = 'uploads/picture';

            $file->move($path, $name);

            $picture = $name;
        }

        if($request->file('signature'))
        {
            $file = $request->file('signature');

            $ext = $file->getClientOriginalExtension();

            $token = sha1(time());

            $prefix = 'signature';

            $name = $prefix.'_'.$token.'.'.$ext;

            $path = 'uploads/signature';

            $file->move($path, $name);

            $signature = $name;
        }

        $student = new Applicant_Info;

        $student->name = $data['name'];
        $student->father_name  = $data['father_name'];
        $student->mother_name = $data['mother_name'];
        $student->local_guardian_name = $data['local_guardian_name'];
        $student->present_address       = $data['present_address'];
        $student->permanent_address   = $data['permanent_address'];
        $student->date_of_birth    = $data['date_of_birth'];
        $student->nationality    = $data['nationality'];
        $student->ssc_passing_year      = $data['ssc_passing_year'];
        $student->ssc_board    = $data['ssc_board'];
        $student->ssc_cgpa    = $data['ssc_cgpa'];
        $student->ssc_class    = $data['ssc_class'];
        $student->hsc_passing_year    = $data['hsc_passing_year'];
        $student->hsc_board    = $data['hsc_board'];
        $student->hsc_cgpa    = $data['hsc_cgpa'];
        $student->hsc_class    = $data['hsc_class'];
        $student->bsc_passing_year    = $data['bsc_passing_year'];
        $student->bsc_university    = $data['bsc_university'];
        $student->bsc_cgpa    = $data['bsc_cgpa'];
        $student->bsc_class    = $data['bsc_class'];
        $student->emergency_contact    = $data['emergency_contact'];
        $student->bkash_transaction_no    = $data['bkash_transaction_no'];
        $student->email    = $data['email'];
        $student->picture      = $picture;
        $student->signature   = $signature;


        if ($student->save())
        {
            return redirect()
                ->route('details')
                ->with('status', 'success')
                ->with('message', 'Student Details Added Successfully! Here are your Details');
        }

        else
        {
            return redirect()
                ->route('form')
                ->with('status', 'danger')
                ->with('message', 'Student details can not be added!!');
        }

    }

    public function home()
    {
        return view('home');
    }
    public function form()
    {
        return view('form');
    }
    public function contact()
    {
        return view('contact');
    }
    public function details()
    {
        $students = DB::table('applicant__infos')->where('id', DB::raw("(select max(`id`) from applicant__infos)"))->get();
        return view('form-details',compact('students'));
    }
    public function admit()
    {
        $applicant = DB::table('applicant__infos')->where('id', DB::raw("(select max(`id`) from applicant__infos)"))->get();
        return view('admit',compact('applicant'));
    }

}
