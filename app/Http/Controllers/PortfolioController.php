<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Certificate;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Skill;

class PortfolioController extends Controller
{
    public function index()
    {   
        $about = About::first();
        $projects = Project::where('visible', true)
            ->orderBy('order')
            ->get();

        $skills = Skill::orderBy('order')
            ->get()
            ->groupBy('category');
        $experiences = Experience::orderBy('start_date', 'desc')
            ->get();
        $education = Education::orderBy('start_date', 'desc')
            ->get();
        $certificates = Certificate::orderBy('issued_at', 'desc')
            ->get();

        return view('portfolio', compact('about', 'projects', 'skills', 'experiences', 'education', 'certificates'));
    }
}
