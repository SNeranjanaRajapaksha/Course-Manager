<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LessonController extends Controller
{
    //new lesson
    public function create()
    {
        return view('lessons.create');
    }
}
