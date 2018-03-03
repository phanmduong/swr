<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function searchJob(Request $request)
    {

        if ($request->search) {
            $jobs = Job::where('title', 'like', '%' . $request->search . '%')
                ->orWhere('price', 'like', '%' . $request->search . '%')->get();
        } else {
            $jobs = Job::all();
        }

        return view('search', ['jobs' => $jobs, 'search' => $request->search]);
    }

    public function profile()
    {
        return view('profile');
    }
}
