<?php

namespace App\Http\Controllers;

use App\Actions;
use App\Cat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    /**
     * Show the application Timeline (dashboard if you want).
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    date_default_timezone_set('Europe/Paris');
    $colors = ["red", "yellow", "aqua", "teal", "olive", "orange", "fuchsia", "purple", "maroon"];
    $actions =  Actions::where([
                          ['type', '<>', '2'],
                          ['type', '<>', '1'],])
                          ->limit(30)
                          ->orderBy('created_at', 'desc')
                          ->get();

    $timeline = [];
    $events = [];
     foreach ($actions as $action){
       switch($action->type){
         case 3:
            $info = "Fontaine";
            $msgContent = "L'état de la fontaine à été changé.";
            $icon = "fa-tint";
            $iconColor = "light-blue";
            break;
          case 4:
            $info = "Distribution manuelle de croquette";
            $msgContent = "Des croquettes ont été distribués manuellement.";
            $icon = "fa-cutlery";
            $iconColor = "blue";
            break;
          default:
            $catName = Cat::where('badgeid', $action->type)->select('name')->get()->first()->name;
            $info = "Distribution de croquettes";
            $msgContent = $catName." a mangé ses croquettes.";
            $icon = "fa-cutlery";
            $iconColor = "green";
            break;
       };
       $event = array('date' => strftime("%a %e %b %Y", strtotime($action->created_at)),
                      'hour' => strftime("%R", strtotime($action->created_at)),
                      'type' => $info,
                      'MSGcontent' => $msgContent,
                      'icon' => $icon,
                      'color' => $iconColor);

      if(empty($events)){
        array_push($events, $event);
      }elseif(end($events)["date"] == $event['date']){
        array_push($events, $event);
      }else{
        array_push($timeline, $events);
        $events = [];
        array_push($events, $event);
      };//Construct $timeline
    };
    array_push($timeline, $events);//push the last array of $events in timeline

     $supply= DB::table('devices')->where('id', 1)->get()[0];


    return view('home', ['timeline' => $timeline, 'color' => $colors[array_rand($colors)], 'supply' => $supply]); //Query limité à un historique des 30 derniers events; on lit directement $action tant que le code est WIP.
  }
}
