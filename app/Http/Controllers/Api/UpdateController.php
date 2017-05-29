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
     if($waterLevel==1){
       DB::table('devices')
              ->where('id', 1)
              ->update(['water_supply' => '75']);
      return "1";
     }
     if ($waterLevel==2){
       DB::table('devices')
              ->where('id', 1)
              ->update(['water_supply' => '25']);
      return "1";
     }

  }

  /**
   * Store food level state.
   *
   * @return \Illuminate\Http\Response
   */
  public function updateFood($foodLevel){
    $foodLevel = 0.256*exp(-($foodLevel-1.22)/0.245)+99.845*10**(-3)-0.1; // foodlevel = distance
    $foodLevel = ((pi()*pow($foodLevel*100, 2))/3)*(3*25-($foodLevel*100)); //V = πh²(3R - h)÷3. donc volume de la calotte
    $foodLevel = ($foodLevel*100)/32708.335; // et la on chope le poucentage avec 32708 en volume max
    /*
    4*pi
    */
    //Distance=0,256*Exp(-(Tension-1,22)/0,245)+99,845E-3
    DB::table('devices')
           ->where('id', 1)
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
