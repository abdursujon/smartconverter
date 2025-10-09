<?php
/*
 * session_start() creates a session or resumes the current
 * one based on a session identifier passed via a GET or POST request
 * , or passed via a cookie.*/
session_start();

$view = new stdClass();  // empty basic object
$view->pageTitle = 'Experimental Cookie Collection';

require_once('Views/experimental-cookie.phtml');






