<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    // Display a list of courses
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    // Show the form to create a new course
    public function create()
    {
        return view('courses.create');
    }

    // Store a new course in the database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
        ]);

        Course::create($validated);

        return redirect()->route('courses.index')->with('success', 'Course created successfully!');
    }

    // Show a specific course in index
    public function show(Course $course)
    {
        return view('courses.show', compact('course'));
    }

    // Show the form to edit a course
    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }

    // Update a course
    public function update(Request $request, Course $course)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
        ]);

        $course->update($validated);

        return redirect()->route('courses.index')->with('success', 'Course updated successfully!');
    }

    // Delete a course in the database
    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('courses.index')->with('success', 'Course deleted successfully!');
    }
}
