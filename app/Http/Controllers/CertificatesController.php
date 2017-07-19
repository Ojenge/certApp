<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use App\Student;
use App\Certificate;
use niklasravnsborg\LaravelPdf\Facades\Pdf;

class CertificatesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
//        return view('home');
        return $this->create_certificate();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $name = $request->input('name');
        $student_id = $request->input('student_id');
        $email = $request->input('email');
        $course = $request->input('course');

        Student::create([
            'name'=> $name,
            'student_id' => $student_id,
            'course_id' => $course,
            'email' => $email

        ]);

        Certificate::create([
            'course_id'=>$course,
            'student_id'=>$student_id,

        ]);


            return redirect()->route('generate', ['student_id' => $student_id]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function create_certificate()
    {


        $data['course_data'] = $this->course_data();

        return view('layouts.certificate_details',['data'=>$data]);


    }

    public function generate_certificate($student_id)
    {

        $data = [
            'name' => $student_id,

        ];
        $pdf = PDF::loadView('pdf.document', ['data'=>$data]);
        return $pdf->stream('document.pdf');

    }
}
