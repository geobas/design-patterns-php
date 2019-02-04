<?php

namespace GeoBas\Observer;

use GeoBas\Contracts\Observer;

class WebServiceNotifier implements Observer
{
	public function handle()
	{
		return 'Call a web service.';
	}
}