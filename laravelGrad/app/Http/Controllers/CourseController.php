<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Course;
use App\Http\Requests\CourseRequest;
use App\Http\Controllers\Controller;


class CourseController extends Controller
{
    public function index()
    {
        return Course::all();    }
    public function store(CourseRequest $request)
    {
     return  
     course::create($request->all());
    }


    public function show(Course $course)
    {
     return $course ;

  }

    public function update(Request $request, Course $course)
    {
        $course->update($request->all());
        return  $course ;
    }

    public function destroy(Course $course)
    {
        $course -> delete();
        return "DELETED";
       }
}
