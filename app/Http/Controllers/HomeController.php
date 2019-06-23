<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Student;
use App\Fee;

class HomeController extends Controller
{
    public function home(){
    //     $students = Student::all();
    //     $student = Student::has('fees')->withCount([
    //         'fees as total_paid' => function ($query){
    //             $query->select(DB::raw('sum(amount)'));
    //         }
    //     ])->get();
    //     $data = [
    //         'students' => $students,
    //         'title' => 'Student Management System',
    //         'student' => $student
    //     ];
        return view('thomas.pages.land');
     }
    public function land(){
        $students = Student::all();
        $student = Student::has('fees')->withCount([
            'fees as total_paid' => function ($query){
                $query->select(DB::raw('sum(amount)'));
            }
        ])->get();
        $data = [
            'students' => $students,
            'title' => 'Student Management System',
            'student' => $student
        ];
        return view('thomas.pages.landing')->with('data',$data);
    }
    }

