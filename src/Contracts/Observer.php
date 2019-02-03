<?php

namespace GeoBas\Contracts;

interface Observer // Subscriber
{
	public function handle();
}