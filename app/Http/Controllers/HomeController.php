<?php

namespace App\Http\Controllers;

use App\Actions;
use App\Cat;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application Timeline (dashboard if you want).
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
       $date = explode(" ", $action->created_at);
       $event = array('date' => $date[0],
                      'hour' => implode(":", explode(":", $date[1], -1)),
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

    $timeline[] = [['date' => '2017-03-08',
                   'hour' => '15:47',
                   'type' => 'It lives !!',
                   'MSGcontent' => 'First launch of Chatmallow !',
                   'icon' => 'fa-rocket',
                   'color' => 'navy']];// Add the "it lives !!" post on the timeline

    return view('home', ['timeline' => $timeline, 'color' => $colors[array_rand($colors)]]); //Query limité à un historique des 30 derniers events; on lit directement $action tant que le code est WIP.
  }
}
