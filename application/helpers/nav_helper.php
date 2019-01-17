<?php
/**
 * Created by PhpStorm.
 * User: guild
 * Date: 17/01/2019
 * Time: 11:34
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('active_link'))
{
    function active_link($controller)
    {
        $CI = &get_instance();

        $class = $CI->router->fetch_class();

        return ($class == $controller) ? 'active' : '';
    }
}
