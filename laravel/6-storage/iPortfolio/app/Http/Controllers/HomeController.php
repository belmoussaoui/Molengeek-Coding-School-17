<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index() {
        $user = User::first();
        $facts = Fact::all();
        $skills = Skill::all();
        $portfolios = Portfolio::all();
        $services = Service::all();
        return view('home', compact('user', 'facts', 'skills', 'portfolios', 'services'));
    }
}
