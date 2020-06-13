<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ActualResult;

class ActualResultController extends Controller
{
    public function index()
    {
        $actual_results = ActualResult::orderBy('job_from', 'desc')->get();

        return $actual_results;
    }
}
