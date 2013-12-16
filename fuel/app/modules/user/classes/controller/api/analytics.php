<?php

namespace User;

class Controller_Api_Analytics extends \Admin\Controller_Base
{
	public function action_index()
	{
		return \Response::forge('This is user/api/analytics/index.');
	}
}
