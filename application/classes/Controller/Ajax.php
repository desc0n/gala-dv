<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax extends Controller {

	public function action_get_typeahead()
	{
		$this->response->body(View::factory('typeahead')->set('words', Model::factory("Word")->getWords($_POST))->set('post', $_POST));
	}

	public function action_get_typeahead_admin()
	{
		$this->response->body(View::factory('typeahead_admin')->set('words', Model::factory("Word")->getWords($_POST))->set('post', $_POST));
	}
}
