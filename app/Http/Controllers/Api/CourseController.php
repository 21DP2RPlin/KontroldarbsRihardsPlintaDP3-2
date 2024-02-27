<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'banner_url' => 'nullable|url',
            'people_count' => 'integer|min:0',
        ]);

        $course = Course::create($request->all());

        return response()->json(['message' => 'Course created successfully', 'course' => $course],  201);
    }
}
