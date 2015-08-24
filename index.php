<?php
/**
 * Created by PhpStorm.
 * User: marius.nica
 * Date: 8/24/2015
 * Time: 12:24
 */

// load Composer
require 'vendor/autoload.php';

// create demo data
$variable = array(1, 17, "hello", null, array(1, 2, 3));

// use KINT directly (which has been loaded automatically via Composer)
d($variable);