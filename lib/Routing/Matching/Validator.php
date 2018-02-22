<?php

namespace Lib\Routing\Matching;

use Lib\Http\Request;
use Lib\Routing\Route;

interface Validator
{
    /**
     * Determine whether the provided route matches the request.
     *
     * @param  \Lib\Routing\Route  $route
     * @param  \Lib\Http\Request  $request
     * @return bool
     */
    public function matches(Route $route, Request $request);
}
