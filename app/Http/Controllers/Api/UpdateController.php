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
     return var_dump($waterLevel);
  }

  /**
   * Store food level state.
   *
   * @return \Illuminate\Http\Response
   */
  public function updateFood($foodLevel){
     return var_dump($foodLevel);
  }

  /**
   * Update an action state.
   *
   * @return \Illuminate\Http\Response
   */
  public function updateState($actionId)
  {
     return var_dump($actionId);
  }
}
