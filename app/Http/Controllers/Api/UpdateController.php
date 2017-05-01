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
   * Store water level state
   *
   * @return \Illuminate\Http\Response
   */
  public function updateWater($waterLevel){
     $waterLevel = intval($waterLevel);
     DB::table('devices')
            ->where('id', 0)
            ->update(['water_supply' => $waterLevel]);
    return "1";
  }

  /**
   * Store food level state.
   *
   * @return \Illuminate\Http\Response
   */
  public function updateFood($foodLevel){
    DB::table('devices')
           ->where('id', 0)
           ->update(['food_supply' => $foodLevel]);
   return "1";
  }

  /**
   * Update an action state.
   *
   * @return \Illuminate\Http\Response
   */
  public function updateState($actionId)
  {
    DB::table('actions')
           ->where('id', $actionId)
           ->update(['executed' => 1]);
   return "1";
  }
}
