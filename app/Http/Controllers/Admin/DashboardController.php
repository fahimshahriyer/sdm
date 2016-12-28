<?php

namespace App\Http\Controllers\Admin;

use App\Student;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {

        $students = DB::table('students')->count();
        $teachers = DB::table('teachers')->count();
        $departments = DB::table('departments')->count();
        $batches = DB::table('batches')->count();
        $courses = DB::table('courses')->count();

        return view('admin.dashboard',[
            'students' => $students,
            'teachers' => $teachers,
            'departments' => $departments,
            'batches' => $batches,
            'courses' => $courses
        ]);
    }
}
