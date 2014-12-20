<?php

class BaseController extends Controller {

	// CSRF filter
	public function __construct() {
		$this->beforeFilter('csrf', array('on' => 'post'));
	}

	// Establish global layout
	protected $layout = 'layouts.main';

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}