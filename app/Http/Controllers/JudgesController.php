<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class JudgesController extends Controller
{
    /**
     * Display Judges page
     *
     * @return response
     */
    public function judges()
    {
        return view('judges.judges');
    }
}
