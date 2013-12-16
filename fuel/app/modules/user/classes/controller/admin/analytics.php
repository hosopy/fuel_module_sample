<?php

namespace User;

class Controller_Admin_Analytics extends \Admin\Controller_Base
{
	public function action_index()
	{
		$this->template->content = 'This is user/admin/analytics/index.';
	}
}
