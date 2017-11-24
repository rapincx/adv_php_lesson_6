<?php

namespace chaOS\ParseSystemBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ParseListController extends Controller
{
	public $list_items = [
		[
			'name' => 'First Item',
			'content' => 'Content For First Item',
			'link' => 'http://vk.com',
			'date' => ' 31 December 2018'
		],
		[
			'name' => 'Second Item',
			'content' => 'Content For Second Item',
			'link' => 'http://vk.com',
			'date' => ' 31 December 2018'
		],
		[
			'name' => 'Third Item',
			'content' => 'Content For Third Item',
			'link' => 'http://vk.com',
			'date' => ' 31 December 2018'
		]
	];
	public function listAction()
	{
		return $this->render('ParseSystemBundle:ParseList:list.html.twig', [
			'list_items' => $this->list_items
		]);
	}
}