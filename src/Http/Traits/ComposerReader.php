<?php 

namespace Adnane\Packalyser\Http\Traits;

trait ComposerReader
{
    /**
    * loads content from composer.lock file 
    * @return array
    *  */ 
    private static function loadFromLockFile()
    {
        $file = file_get_contents(base_path('composer.lock'));

        return json_decode($file ,true);
    }

    /**
    * get the dev dependencies 
    * @return array
    *  */ 
    private static function getDevRequirements()
    {
        return self::loadFromLockFile()['packages-dev'];
    }

    /**
    * get the dependencies 
    * @return array
    *  */ 
    private static function getRequirements()
    {
        return self::loadFromLockFile()['packages'];
    }

    /**
    * get all the dependencies 
    * @return array
    *  */ 
    private static function getAllRequirements()
    {
        return array_merge(self::getDevRequirements() ,self::getRequirements());
    }
}
