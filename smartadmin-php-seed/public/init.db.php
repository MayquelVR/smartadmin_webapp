<?php

// if you're planning to use the php-models class, you can put code below to the init.php file so this gets intiated globally

// configure parent model
\Models\Model::connect(DB_HOST, DB_NAME, DB_USER, DB_PASSWORD);
\Models\Model::$db->on_error(function($msg) {
	plog($msg);
});

// configure models
\Models\User::register('users');