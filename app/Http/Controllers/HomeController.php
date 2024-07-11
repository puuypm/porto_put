<?php

namespace App\Http\Controllers;

use App\Models\Awards;
use App\Models\Interest;
use App\Models\Skill;
use App\Models\Skill2;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Profile;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $profile = Profile::get()->last();
        $experiences = Experience::get();
        $experience = Education::get()->last();
        $education2 = Education::get();
        $education = Education::get()->last();
        $skill = Skill::get()->last();
        $skill2 = Skill::get();
        $interest = Interest::get()->last();
        $interests = Interest::get();
        $award = Awards::get()->last();
        $awards = Awards::get();
        $setting = Setting::first();
        return view('home.index', compact('profile','experience','experiences','education','education2','skill','skill2','interest','interests','awards','setting'));
    }
}
