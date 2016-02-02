<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Item extends Controller {

	public function action_show()
	{
        /**
         * @var $noticeModel Model_Notice
         */
        $noticeModel = Model::factory('Notice');

        $template=View::factory("template");
		$id = $this->request->param('id');
		$_GET['id'] = $id;
		$notice = $noticeModel->getNotice($_GET);
		$notice_info = (!empty($notice) ? $notice[0] : []);

        View::set_global('pageTitle', sprintf('%s.', Arr::get($notice_info, 'name')));

		$template->content=View::factory("item")
			->set('notice_info', $notice_info)
            ->set('noticeParams', $noticeModel->getNoticeParams($_GET))
			->set('id', $id);
		$this->response->body($template);
	}

	public function action_sale()
	{
		$template=View::factory("template");
		$id = $this->request->param('id');
		$_GET['id'] = $id;
		$notice = Model::factory('Notice')->getNoticeSale($_GET);
		$notice_info = (!empty($notice) ? $notice[0] : []);
		$params['category_id'] = 5;
		$template->content=View::factory("item_sale")
			->set('categoryArr', Model::factory('Admin')->getCategory($params))
			->set('notice_info', $notice_info)
			->set('params', $params)
			->set('id', $id);
		$this->response->body($template);
	}

}