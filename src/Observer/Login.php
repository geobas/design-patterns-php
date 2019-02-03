<?php

namespace GeoBas\Observer;

use GeoBas\Contracts\Subject;
use GeoBas\Contracts\Observer;

class Login implements Subject
{
	protected $observers;

	public function attach(Observer $observer)
	{
		$this->observers[] = $observer;

		return $this;
	}

	public function detach($index)
	{
		unset($this->observers[$index]);
	}

	public function notify()
	{
		foreach ($this->observers as $observer) {
			dump($observer->handle());
		}
	}

	public function fire()
	{
		// perform the login
		$this->notify();
	}
}