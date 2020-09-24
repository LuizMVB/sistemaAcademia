<?php
//creating a variable with the current script name without the '.php'
$script_name=basename(__FILE__, '.php');
require_once 'template/standard_top.php';
require_once 'template/main_page.html';
require_once 'template/standard_bottom.php';