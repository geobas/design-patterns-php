<?php

namespace GeoBas\Template;

use GeoBas\Template\Sub;

class VeggieSub extends Sub
{
	protected function addPrimaryTopics()
	{
		$this->actions .= ', add some veggies';
		return $this;
	}
}