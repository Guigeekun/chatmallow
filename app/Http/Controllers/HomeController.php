<?php

namespace App\Http\Controllers;

use App\Actions;
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
      $actions =  Actions::where('type', 'info')
                          ->limit(30)
                          ->orderBy('created_at', 'asc');

/*########## Code WIP ##########
     $timeline = [];
     foreach ($actions as $event){
       switch($event->type){
         case 1:
            break;
         case 2:
            break;
         case 3:
            $info = "Fontaine";
            $msgContent = "L'état de la fontaine à été changé.";
            $icon = "fa-tint";
            break;
          case 4:
            $info = "Distribution manuelle de croquette";
            $msgContent = "Des croquettes ont été distribués manuellement.";
            $icon = "fa-cutlery";
            break;
          default:
            $catName = DB::table('cats')->where('badgeid', $event->type)->first()->name;
            $info = "Distribution de croquettes";
            $msgContent = $catName + " a mangé ses croquettes.";
            $icon = "fa-cutlery";
            break;
       }
        $events = array('date' => explode(" ", $event->created_at)[0],
                        'hour' => explode(" ", $event->created_at)[1],
                        'type' => $info,
                        'MSGcontent' => $msgContent,
                        'icon' => $icon);

        array_push($timeline, $events);
    };



/*########## Construction de la variable $timeline et hierarchie de sa lecture dans home.blade ##########

Symboles utilisés pour identifier les variables:
      ^tableau
      /str

 Le principe est de regrouper les events sous une même date, peu importe leur heure d'execution.

     $timeline--|--^DateEvent1--|--/date
                |               |
                |               |--^eventsOnThisDate--|--/hour
                |                                     |
                |                                     |--/type
                |                                     |
                |                                     |--/MSGcontent
                |                                     |
                |                                     |--/icon
                |
                |--^DateEvent2--|--/date
                                |
                                |--^eventsOnThisDate--|--/hour
                                                      |
                                                      |--/type
                                                      |
                                                      |--/MSGcontent
                                                      |
                                                      |--/icon
*/

      return view('home', ['timeline' => $actions]); //Query limité à un historique des 30 derniers events; on lit directement $action tant que le code est WIP.
    }
}
