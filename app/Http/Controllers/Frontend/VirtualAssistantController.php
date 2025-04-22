<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VirtualAssistantController extends Controller
{
    public function index()
    {
        return view('frontend.virtual_assistant');
    }
}
