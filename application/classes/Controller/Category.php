<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Category extends Controller {

	public function action_list()
	{
        /**
         * @var $adminModel Model_Admin
         */
        $adminModel = Model::factory('Admin');

        /**
         * @var $noticeModel Model_Notice
         */
        $noticeModel = Model::factory('Notice');

        $categoryArr = $adminModel->getCategory(Arr::get($_GET, 'cid'), Arr::get($_GET, 'category_id'));

        View::set_global('pageTitle', sprintf('%s.', Arr::get(Arr::get($categoryArr, 0, []), 'name')));

        $template=View::factory("template");
		$template->content = View::factory("category")
            ->set('categoryArr', $categoryArr)
            ->set('subCategoryArr', $adminModel->getCategory(Arr::get($_GET, 'category_id')))
			->set('notices', $noticeModel->getNotice($_GET))
			->set('get', $_GET)
			->set('post', $_POST);
		$this->response->body($template);
	}

	public function action_sale()
	{
		$template=View::factory("template");
		$_GET['category_id'] = 5;
		$params = [];
		$params = array_merge($params, $_GET);
		$params = array_merge($params, $_POST);
		$template->content = View::factory("category_sale")
			->set('categoryArr', Model::factory('Admin')->getCategory($params))
			->set('noticeData', Model::factory('Notice')->getNoticeSale($params))
			->set('get', $_GET)
			->set('post', $_POST);
		$this->response->body($template);
	}

}