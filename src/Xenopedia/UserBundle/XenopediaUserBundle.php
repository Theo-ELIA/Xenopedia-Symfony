<?php

namespace Xenopedia\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class XenopediaUserBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}
