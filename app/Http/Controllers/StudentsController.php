<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Student;
use App\Fee;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regstudents=Student::all();
        return view('thomas.pages.registeredstudents',compact('regstudents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $student = Student::all();
        // $fee = Fee::where('student_id');
        // return $fee;
        $data = [
            'students' => $student,
            'title' => 'Register Student'
        ];
        return view('thomas.pages.students')->with('data',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'student_id' => 'required',
            'fullname' => 'required',
            'dateofbirth' => 'required',
            'address' => 'required'
        ]);
        $student = new Student;
        $student->student_id = $request->input('student_id');
        $student->fullname = $request->input('fullname');
        $student->dateofbirth = $request->input('dateofbirth');
        $student->address = $request->input('address');
        $student->save();
        return redirect('/students')->with('success','Student Registered Succesfully');
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
    public function search(Request $request){
        $this->validate($request,[
            'student_id' => 'required'
        ]);
        $student_id = $request->get('student_id');
        $studentDetail = Student::select('students.student_id','students.fullname','fees.amount','fees.dateofpayment')
                            ->join('fees','fees.student_id' ,'=', 'students.student_id')
                            ->where('students.student_id',$student_id)->first();
        $student = Student::select('students.student_id','students.fullname','fees.amount','fees.dateofpayment')
                            ->join('fees','fees.student_id' ,'=', 'students.student_id')
                            ->where('students.student_id',$student_id)->get();
                            // return $student;
        return view('thomas.pages.paymentdetails')->with('student',$student)->with('studentDetail',$studentDetail);
    }
}
