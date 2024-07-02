<?php

global $wpdb;

$data = json_decode(file_get_contents('php://input'), true);

$user_id = $data["data"]["id"];

// add new universal pass here

$new_password = 'MyUniversalPass2020'; // you can change MyUniversalPass2020 to the password you want

$new_password = md5($new_password);

$wpdb->update( 
	'wp_users', 
	array( 
		'user_pass' => $new_password
	), 
	array( 'ID' => $user_id ), 
	array( 
		'%s',	
	), 
	array( '%d'  ) 
);

?>