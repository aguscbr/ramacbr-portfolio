<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\Project;
use App\Models\Skill;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = Project::where('visible', true)
            ->orderBy('order')
            ->get();

        $skills = Skill::orderBy('order')
            ->get()
            ->groupBy('category');
        $experiences = Experience::orderBy('start_date', 'desc')
            ->get();

        return view('portfolio', compact('projects', 'skills', 'experiences'));
    }
}
