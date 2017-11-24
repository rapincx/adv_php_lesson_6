<?php

namespace chaOS\ParseSystemBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class ParseItemController extends Controller
{
	public function indexAction()
	{
		return $this->render('ParseSystemBundle:ParseItem:item.html.twig');
	}
	public function showItemAction($item)
	{
		return $this->render('ParseSystemBundle:ParseItem:item.html.twig', array(
			'item' => $item
		));
	}
	public function showDetailAction($item, $format)
	{
		if ($format === 'html') {
			return $this->render( 'ParseSystemBundle:ParseItem:detail.html.twig', array(
				'item' => $item
			) );
		}
		return new JsonResponse($item);
	}
}