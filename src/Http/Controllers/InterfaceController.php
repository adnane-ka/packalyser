<?php

namespace Adnane\Packalyser\Http\Controllers;
use Illuminate\Routing\Controller;

class InterfaceController extends Controller
{    
    /**  
     * handle the incoming request 
     * @return \Illuminate\View\View
     * */
    public function __invoke()
    {
        return view('packalyser::index');
    }
}
