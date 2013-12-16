<?php

namespace Api;
/**
 * apiモジュールのサブモジュールへリクエストを転送するコントローラー
 */
class Controller_Api extends \Controller_Rest
{
	/**
	 * /api/module/controller/action/params へのHTTPリクエストを、
	 * /module/api/controller/action/params へのHMVCリクエストとして転送する
	 *
	 * @Override
	 */
	public function router($resource, $arguments)
	{
		if (\Module::loaded($resource))
		{
			return \Request::forge($resource.'/api/'.join('/', $arguments), true)->execute()->response;
		}
		else
		{
			return parent::router($resource, $arguments);
		}
	}
}
