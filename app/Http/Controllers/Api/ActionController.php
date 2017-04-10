<?php

namespace App\Http\Controllers\Api;

use App\Actions;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class ActionController extends Controller
{

    /**
     * Retrieve current user
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $response = DB::table('actions')
                       ->where('executed',0)
                       ->get();
        return response()->json([
            'success' => true,
            'data' => $response,

        ]);
    }
}
