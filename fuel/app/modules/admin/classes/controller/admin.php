<?php

namespace Admin;
/**
 * adminモジュールのサブモジュールへリクエストを転送するコントローラー
 */
class Controller_Admin extends \Controller_Hybrid
{
	/**
	 * /admin/module/controller/action/params へのHTTPリクエストを、
	 * /module/admin/controller/action/params へのHMVCリクエストとして転送する
	 *
	 * @Override
	 */
	public function router($resource, $arguments)
	{
		if (\Module::loaded($resource))
		{
			return \Request::forge($resource.'/admin/'.join('/', $arguments), true)->execute()->response;
		}
		else
		{
			return parent::router($resource, $arguments);
		}
	}
}
