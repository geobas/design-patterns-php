<?php

namespace GeoBas\Specification;

class CustomerIsGold
{
	public function isSatisfiedBy(Customer $customer)
	{
		return $customer->getType() == 'gold';
	}
}