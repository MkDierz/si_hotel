<?php

include 'include/db.php';

// set base_url
$config['base_url']  = "http://" . $_SERVER['HTTP_HOST'];
$config['base_url'] .= preg_replace('@/+$@', '', dirname($_SERVER['SCRIPT_NAME'])) . '/';

//
