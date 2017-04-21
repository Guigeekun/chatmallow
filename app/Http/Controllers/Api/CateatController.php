<?php

namespace App\Http\Controllers\Api;

use App\Actions;
use App\Cat;
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
      $cat = Cat::where('badgeid','LIKE', $badgeid)->first();
      if(isset($cat)){
        if($cat['allowedfood'] > $cat['usedfood']){
          Actions::insert([
            'type' => $badgeid,
            'devices_id' => 1,
            'executed' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
          ]);
          Cat::where('badgeid','LIKE','`'.$badgeid.'`')->increment('usedfood');
          return '1';
        };
      };
      return '0';
    }
}
