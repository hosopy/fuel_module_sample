<?php

namespace User;

class Controller_Admin extends \Admin\Controller_Base
{
	public function action_index()
	{
		$this->template->content = 'This is user/admin/index.';
	}
}
