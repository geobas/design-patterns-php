<?php

namespace GeoBas\Observer;

use GeoBas\Contracts\Observer;

class EmailNotifier implements Observer
{
	public function handle()
	{
		return 'Fire off an email.';
	}
}