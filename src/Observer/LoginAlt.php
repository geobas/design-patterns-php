<?php

namespace GeoBas\Observer;

use GeoBas\Contracts\SubjectAlt;
use GeoBas\Contracts\Observer;

class LoginAlt implements SubjectAlt
{
	protected $observers;

	public function attach($observable)
	{
		if ( is_array($observable) ) {
			return $this->attachObservers($observable);
		}

		$this->observers[] = $observable;
	}

	public function detach($index)
	{
		unset($this->observers[$index]);
	}

	public function notify()
	{
		foreach ((array)$this->observers as $observer) {
			dump($observer->handle());
		}
	}

	public function fire()
	{
		// perform the login
		$this->notify();
	}

	private function attachObservers($observable)
	{
		foreach($observable as $observer)
		{
			if ( !$observer instanceof Observer ) throw new \Exception;

			$this->attach($observer);
		}

		return $this;
	}
}