<?php

namespace GeoBas\Contracts;

interface Subject // Publisher
{
	public function attach(Observer $observer);

	public function detach($index);

	public function notify();
}