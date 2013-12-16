<?php

namespace User;

class Controller_Api extends \Api\Controller_Base
{
	public function action_index()
	{
		return \Response::forge('This is user/api/index.');
	}
}
