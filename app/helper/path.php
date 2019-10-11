<?php

function getModulePath( string $moduleNmae ) : string {
    return app_path(
        "Modules".DIRECTORY_SEPARATOR.$moduleNmae.DIRECTORY_SEPARATOR
    );
}
/*
 * load route
 * */
function load_route( string $module, string $fileName ) :string {

    return getModulePath($module)."routes".
    DIRECTORY_SEPARATOR.$fileName.".php";
}

/*
 * load views
 * */
function load_views( string $module ) : string {
    return getModulePath($module)."resources".
        DIRECTORY_SEPARATOR."views";
}

/*
 * load migrations
 * */
function load_migrations( string $module ) : string {
    return getModulePath($module)."database".
        DIRECTORY_SEPARATOR."migrations";
}

/*
 * load translations file
 * */
function load_translations( string $module ) : string {
    return getModulePath($module)."resources".
        DIRECTORY_SEPARATOR."lang";
}

/*
 * load config
 * */
function load_config( string $module , string  $fileName ) : string {
   return  getModulePath($module)."config".
    DIRECTORY_SEPARATOR.$fileName.".php";
}

