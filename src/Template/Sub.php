<?php

namespace GeoBas\Template;

abstract class Sub
{
	protected $actions;

	public function make()
	{
		$this->layBread()
			 ->addLettuce()
			 ->addPrimaryTopics()
			 ->addSauces();

		return $this->actions;
	}

	protected function layBread()
	{
		$this->actions .= 'laying down the bread';
		return $this;
	}

	protected function addLettuce()
	{
		$this->actions .= ', add some lettuce';
		return $this;
	}

	protected function addSauces()
	{
		$this->actions .= ', add oil and vinegar';
		return $this;
	}

	protected abstract function addPrimaryTopics();
}