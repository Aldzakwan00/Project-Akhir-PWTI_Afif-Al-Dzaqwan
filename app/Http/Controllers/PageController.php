<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ProfilePicture;
use App\Models\Background;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Contact;

class PageController extends Controller
{
    public function index()
    {
        $users = User::all();
        $profilePictures = ProfilePicture::all();
        $backgrounds = Background::all();
        $projects = Project::all();
        $programmingSkills = Skill::where('kategori', 'programming')->get();
        $worldLanguages = Skill::where('kategori', 'language')->get();

        return view('index', compact('users', 'profilePictures', 'backgrounds', 'projects', 'programmingSkills', 'worldLanguages'));
    }
}

