<?php

	/* Autoloading classes */
	require 'libs/Bootstrap.php';
	require 'libs/Controller.php';
	require 'libs/Model.php';
	require 'libs/View.php';

	/* Library */
	require 'libs/Database.php';

	require 'config/routes.php';
	require 'config/database.php';

	$app = new Bootstrap();

?>