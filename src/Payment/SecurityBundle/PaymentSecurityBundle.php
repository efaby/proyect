<?php

namespace Payment\SecurityBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class PaymentSecurityBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}
