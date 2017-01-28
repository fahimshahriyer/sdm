<?php

namespace App\Http\Controllers\Admin;

use App\Course;
use App\Exam;
use App\Grade;
use App\Http\Requests\StoreResultRequest;
use App\Result;
use App\Semester;
use App\Student;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Result::orderBy('created_at')->paginate(15);

        return view('admin.results.index',[
            'results' => $results
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $semesters = Semester::all();
        $courses = Course::all();
        $exams = Exam::all();
        $grades = Grade::all();

        return view('admin.results.create' , [
            'semesters' => $semesters,
            'courses' => $courses,
            'exams' => $exams,
            'grades' => $grades
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreResultRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreResultRequest $request)
    {
        $student = Student::where('roll', $request->student_id)->first();

        Result::create([
            'student_id' => $student->id,
            'semester_id' => $request->semester_id,
            'exam_id' => $request->exam_id,
            'grade_id' => $request->grade_id,
        ]);

        return redirect(route('result.index'));
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
}
