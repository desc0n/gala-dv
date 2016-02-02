<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller {

	public function action_index()
	{
        /**
         * @var $adminModel Model_Admin
         */
        $adminModel = Model::factory('Admin');

        View::set_global('pageTitle', 'Вступление.');

		$template = View::factory("slider")
            ->set('mainPageData', $adminModel->getMainPageData())
			->set('get', $_GET)
			->set('post', $_POST);
		$this->response->body($template);
	}

	public function action_home()
	{
        /**
         * @var $adminModel Model_Admin
         */
        $adminModel = Model::factory('Admin');

        View::set_global('pageTitle', 'Главная.');

        $template=View::factory("template");

		$template->content = View::factory("home")
			->set('homePageData', $adminModel->getHomePageData())
			->set('get', $_GET)
			->set('post', $_POST);

		$this->response->body($template);
	}

	public function action_molding()
	{
        /**
         * @var $adminModel Model_Admin
         */
        $adminModel = Model::factory('Admin');

        View::set_global('pageTitle', 'Багет.');

        $template=View::factory("template");

		$template->content = View::factory("molding")
            ->set('pageData', Model::factory('Admin')->getPage(['id' => 21]))
			->set('get', $_GET)
			->set('post', $_POST);

		$this->response->body($template);
	}

	public function action_catalogs()
	{
        /**
         * @var $adminModel Model_Admin
         */
        $adminModel = Model::factory('Admin');

        View::set_global('pageTitle', 'Каталог товара.');

        $template=View::factory("template");

		$template->content = View::factory("catalogs")
            ->set('catalogsData', $adminModel->getCatalogsData())
			->set('get', $_GET)
			->set('post', $_POST);

		$this->response->body($template);
	}

	public function action_page()
	{
        /**
         * @var $adminModel Model_Admin
         */
        $adminModel = Model::factory('Admin');

		$template=View::factory("template");
		$id = $this->request->param('id');
		$_GET['id'] = $id;

        $pageData = $adminModel->getPage($_GET);

        View::set_global('pageTitle', sprintf('%s.', Arr::get($pageData, 'title')));

		$template->content = View::factory("page")
			->set('pageData', $pageData)
			->set('get', $_GET);

		$this->response->body($template);
	}

}