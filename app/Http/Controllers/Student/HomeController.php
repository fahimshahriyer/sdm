<?php

namespace App\Http\Controllers\Student;

use App\Student;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        $student = Student::where('user_id', $id)->first();

        return view('student.home', [
            'student' => $student
        ]);
    }
}
