<?php

/**
* Error Controller
*/
class Error extends Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->view->msg = '404 Page not found<br>';
		$this->view->render('error/index');
	}
}