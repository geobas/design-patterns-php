<?php

namespace GeoBas\Observer;

use GeoBas\Contracts\Observer;

class SMSNotifier implements Observer
{
	public function handle()
	{
		return 'Fire off an sms.';
	}
}