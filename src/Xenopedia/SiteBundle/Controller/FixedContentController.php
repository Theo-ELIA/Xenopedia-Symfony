<?php

namespace Xenopedia\SiteBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Xenopedia\UserBundle\Entity\User;
use Xenopedia\SiteBundle\Entity\Cliche;
class FixedContentController extends Controller
{
	
	public function aboutAction()
	{
		return new Response();
	}
}