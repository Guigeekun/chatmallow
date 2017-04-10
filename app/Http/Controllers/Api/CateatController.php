<?php

namespace App\Http\Controllers\Api;

use App\Actions;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class CateatController extends Controller
{

    /**
     * Retrieve current user
     *
     * @return \Illuminate\Http\Response
     */
    public function index($badgeid)
    {
      $realbadgeid=DB::table('actions')
                       ->where('badgeid','LIKE','`'.$badgeid.'`')
                       ->get();

        return '1';
    }
}
