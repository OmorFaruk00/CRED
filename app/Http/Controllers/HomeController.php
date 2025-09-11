<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function director()
    {
        return view('about.director');
    }
    public function visionMission()
    {
        return view('about.vision-mission');
    }
    public function objectives()
    {
        return view('about.objectives');
    }
    public function governanceStructure()
    {
        return view('about.governance-structure');
    }
    public function advisoryBoard()
    {
        return view('about.advisory-board');
    }
    public function team()
    {
        return view('about.team');
    }



}
