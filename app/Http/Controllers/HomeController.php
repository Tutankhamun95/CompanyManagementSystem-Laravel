<?php

namespace App\Http\Controllers;
use App\Project;
use App\School;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        $schools = School::all();
        return view('welcome', compact('schools','projects'));
    }

    // public function show(Project $project)
    // {
    //     $projects = Project::all();
    //     $schools = School::all();
    //     $participants = Participant::all();
    //     return view('welcome',compact('projects'));
    // }
}
