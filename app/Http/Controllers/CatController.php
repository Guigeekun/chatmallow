<?php

namespace App\Http\Controllers;

use App\cat;
use App\Http\Controllers\Controller;

class CatController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */

    public function index()
    {
        return view('cats');
    }

    public function store()
    {

    }
}
