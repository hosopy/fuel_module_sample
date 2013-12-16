<?php

namespace User;

class Controller_Root extends \Controller
{
	public function action_index()
	{
		return \Response::forge('This is user/root/index.');
	}
}
