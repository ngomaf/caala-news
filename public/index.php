<?php

error_reporting(E_ALL);
ini_set("display_errors", 1); // 1

use resources\libraries\Route;

require_once "../config.php";
require_once PATH . "/vendor/autoload.php";

(new Route)::index();