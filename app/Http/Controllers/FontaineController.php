<?php

namespace App\Http\Controllers;

use App\Actions;
use Illuminate\Http\Request;

class FontaineController extends Controller
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
  public function on()
  {
    $action = new Actions;
    $action->type = '3';
    $action->devices_id = '1';
    $action->executed = '0';

    $action->save();
    return redirect ('/');
  }
}
