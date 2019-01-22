<?php

namespace GeoBas\Template;

use GeoBas\Template\Sub;

class TurkeySub extends Sub
{
	protected function addPrimaryTopics()
	{
		$this->actions .= ', add some turkey';
		return $this;
	}
}