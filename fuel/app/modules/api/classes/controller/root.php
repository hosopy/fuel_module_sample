<?php

namespace Api;

class Controller_Root extends Controller_Base
{
	public function action_index()
	{
		return \Response::forge('This is api/root/index.');
	}

	public function action_healthcheck()
	{
		return \Response::forge('This is api/root/healthcheck.');
	}
}
