<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Template_Blog extends Controller_Template {

	public function before()
	{
		// Open remote URLs in a new window
		html::$windowed_urls = TRUE;

		parent::before();

		$this->template->title =
		$this->template->content = '';
	}

} // End Controller_Template_Blog