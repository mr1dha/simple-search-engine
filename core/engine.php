<?php 
	$q = $_GET['q'];
	$n = isset($_GET['n']) ? $_GET['n'] : 10;

	$output = shell_exec("python query.py ".$n." ".$q);
	
	$articles = json_decode($output);
	$time = array_pop($articles);
