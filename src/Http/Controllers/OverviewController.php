<?php

namespace Adnane\Packalyser\Http\Controllers;
use Illuminate\Routing\Controller;

use Adnane\Packalyser\Http\Traits\ComposerReader;

class OverviewController extends Controller
{    
    use ComposerReader;
    
    public function __invoke() : object
    {
        return response()->json([
            'depends' => $this->countDepends(),
            'dev_depends' => $this->countDevDepends(),
            'libraries'=> $this->countFromType('library'),
            'projects' => $this->countFromType('project'),
            'metapackages' => $this->countFromType('meta-package'),
            'composer_plugins' => $this->countFromType('composer-plugin')
        ]);
    }

    /**
     * count the dependencies installed 
     */
    private function countDepends() : int
    {
        return count(self::getRequirements());
    }

    /**
     * count the dev dependencies installed 
     */
    private function countDevDepends() : int
    {
        return count(self::getDevRequirements());
    }

    /**
     * count the (dev) dependencies installed under the type of $type  
     */
    private function countFromType(string $type) : int
    {
        $returned = [];
        foreach(self::getAllRequirements() as $depend)
        {
            if($depend['type'] == $type)
            {
                array_push($returned ,$depend);
            }
        }
        return count($returned);
    }
}
