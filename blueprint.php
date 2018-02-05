<?php

return [
    /**
     ******************************************************************************** 
     * 
     ********************************************************************************
     *
     * 
    */
    'routes'   => glob(realpath(__DIR__.'/system/routes').DS.'*.*', GLOB_NOSORT),
    /**
     ******************************************************************************** 
     * 
     ********************************************************************************
     *
     * 
    */
    'configs'  => glob(realpath(__DIR__.'/system/config').DS.'*.php', GLOB_NOSORT),
    /**
     ******************************************************************************** 
     * 
     ********************************************************************************
     *
     * 
    */
    'views'    => glob(realpath(__DIR__.'/client/views').DS.'*.php', GLOB_NOSORT)
];