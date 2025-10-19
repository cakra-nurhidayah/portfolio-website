<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {   
        $projects = Project::with(['gambar' => function ($q) {
            $q->orderBy('sort_order')->orderBy('id_gambar');
        }])->orderByDesc('id_projek')->get();
        $skills = Skill::latest()->get();
        $services = Service::latest()->get();

        return view('user/home', compact('projects', 'skills', 'services'));
    }

    public function projects()
    {
        $projects = Project::with(['gambar' => function ($q) {
            $q->orderBy('sort_order')->orderBy('id_gambar');
        }])->orderByDesc('id_projek')->get();

        return view('user/project', compact('projects'));
    }

    public function projectDetail($id)
    {
        $project = Project::with(['gambar' => function ($q) {
            $q->orderBy('sort_order')->orderBy('id_gambar');
        }])->findOrFail($id);

        return view('user/project-detail', compact('project'));
    }
}
