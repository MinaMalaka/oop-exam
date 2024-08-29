<?php

require_once 'conn.php';
require_once 'classes/request.php';
require_once 'classes/session.php';
require_once 'classes/validation.php';
use Route\Oop\Exam\Request;
use Route\Oop\Required\Session;
use Route\Oop\Required\Validation;
$request = new Request;
$session = new Session;
$validation = new Validation;
