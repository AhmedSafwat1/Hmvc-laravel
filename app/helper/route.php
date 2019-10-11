<?php


/*
 *  build prefix in route
 * */
function build_prefix(string  $moduleName,string $type) : string {
    return config(
        "{$moduleName}.route.prefix.{$type}",
        "module.route.prefix.{$type}"
    );
}

function build_controller_namespace( string $module) : string {
    return ucfirst($module)."\Http\Controllers";
}