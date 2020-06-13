<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\Category;

class SkillController extends Controller
{
    public function index()
    {

        $skills = Category::with('skills')->get();

        return $skills;
    }
}
