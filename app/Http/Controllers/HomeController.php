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
         case 0:
            $info = ;
            $msgContent = ;
            break;
         case 1:
            $info = ;
            $msgContent = ;
            break;
         case 2:
            $info = ;
            $msgContent = ;
            break;
         case 3:
            $info = ;
            $msgContent = ;
            break;
          case 4:
            $info = ;
            $msgContent = ;
            break;
       }
        $events = array('date' => explode(" ", $event->created_at)[0],
                        'hour' => explode(" ", $event->created_at)[1],
                        'type' => $info,
                        'MSGcontent' => $msgContent);
        $timeline
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
                |
                |--^DateEvent2--|--/date
                                |
                                |--^eventsOnThisDate--|--/hour
                                                      |
                                                      |--/type
                                                      |
                                                      |--/MSGcontent

*/

      return view('home', ['timeline' => $actions]); //Query limité à un historique des 30 derniers events; on lit directement $action tant que le code est WIP.
    }
}
