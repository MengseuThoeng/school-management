<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function create()
    {
        return view('backend.courses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_code' => 'required|string|max:191',
            'course_name' => 'required|string|max:191',
            'syllabus' => 'required|string|max:191',
            'duration' => 'nullable|integer',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'major_id' => 'required|integer',
        ]);

        $data = [
            'course_code' => $request->course_code,
            'course_name' => $request->course_name,
            'syllabus' => $request->syllabus,
            'durations' => $request->duration ?? 1,
            'price' => $request->price,
            'description' => $request->description,
            'major_id' => $request->major_id,
        ];

        Course::create($data);

        return redirect()->back()->with('success', 'Course created successfully!');
    }

    public function index()
    {
        $courses = Course::all(); // Or use pagination: Course::paginate(10)
        return view('backend.courses.index', compact('courses'));
    }
}