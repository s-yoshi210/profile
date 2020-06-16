<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Development;

class DevelopmentController extends Controller
{
    public function index()
    {
        $developments = Development::orderBy('id', 'desc')->get();

        return $developments;
    }
}
