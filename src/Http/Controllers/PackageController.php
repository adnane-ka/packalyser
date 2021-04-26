<?php

namespace Adnane\Packalyser\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Adnane\Packalyser\Http\Traits\ComposerReader;

class PackageController extends Controller
{
    use ComposerReader;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return [
            'require' => self::getDevRequirements(),
            'require-dev' => self::getRequirements()
        ];
    }
}
