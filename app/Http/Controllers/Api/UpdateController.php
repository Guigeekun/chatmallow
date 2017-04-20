<?php

namespace App\Http\Controllers\Api;

use App\Actions;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class UpdateController extends Controller
{

    /**
     * Retrieve current user
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    DB::table('actions')
        ->where('id',0)
        ->update(['water_supply' => $request->('eau')])
        ->update(['food_supply' => $request->('croquette')])
    ;
  }
}
