<?php

namespace Admin;

class Controller_Root extends Controller_Base
{
	public $template = 'admin::template';

	public function action_index()
	{
		$this->template->content = 'This is admin/root/index.';
	}
}
