<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use App\Jobs\Create50Courses;
use App\Exports\CoursesExport;
use Maatwebsite\Excel\Facades\Excel;

class CourseController extends Controller
{
    //
    public function index()
    {
        $allCourses = Course::all();

        return response()->json($allCourses, 200);
    }

    public function create(Request $request)
    {
        $newCourse = Course::create($request->all());

        if ($newCourse) {
            return response()->json(['Success' => 'Course created', 'course' => $newCourse], 200);
        }
    }

    public function exportExcel()
    {
        return Excel::download(new CoursesExport, 'courses.xlsx');
    }

    public function exportCSV()
    {
        return Excel::download(new CoursesExport, 'courses.csv');
    }

    public function create50Courses()
    {
        $createCoursesJob = new Create50Courses();
        if (dispatch($createCoursesJob)) {
            return response()->json(['success' => 'Factory executed'], 200);
        }
    }
}
