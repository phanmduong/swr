<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

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
}
