<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller {

	public function action_index()
	{
		$this->response->body('hello, world!');
	}

        public function action_other()
        {
            $content = "And here's another one!";
            $this->response->body($content);
        }
} // End Welcome
