<?php

	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
	    $ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
	    $ip = $_SERVER['REMOTE_ADDR'];
	}

	header('value: x-hello-world');

	if (isset($_GET['name'])) {
		echo json_encode(['ip' => $ip, 'name' => $_GET['name']]);
	}

	echo json_encode([['ip' => $ip]]);
