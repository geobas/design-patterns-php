<?php

namespace GeoBas\Contracts;

interface SubjectAlt // Publisher
{
	public function attach($observervable);

	public function detach($index);

	public function notify();
}