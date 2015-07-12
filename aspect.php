<?php
/**
 * Created by PhpStorm.
 * User: Tokey
 * Date: 2015/7/11
 * Time: 23:22
 */
include __DIR__ . './Application/Common/Aspect/ApplicationAspectKernel.php';

// Prevent an error about nesting level
ini_set('xdebug.max_nesting_level', 500);

// Initialize an application aspect container
$applicationAspectKernel = ApplicationAspectKernel::getInstance();
$applicationAspectKernel->init(array(
    'debug' => true
));