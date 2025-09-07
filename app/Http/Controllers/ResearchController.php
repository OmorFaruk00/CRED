<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResearchController extends Controller
{
    public function ongoingResearchProject()
    {
        return view('research.ongoing-research-project');
    }
    public function completedResearch()
    {
        return view('research.completed-research');
    }
}
