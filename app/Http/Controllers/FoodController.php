<?php

namespace App\Http\Controllers;

use App\Actions;
use Illuminate\Http\Request;

class FoodController extends Controller
{
  /**
   * Show the profile for the given user.
   *
   * @param  int  $id
   * @return Response
   */
  public function index()
  {

  }
  public function dist()
  {
    $action = new Actions;
    $action->type = '4';
    $action->devices_id = '1';
    $action->executed = '0';

    $action->save();
    return redirect ('/');
  }
}
