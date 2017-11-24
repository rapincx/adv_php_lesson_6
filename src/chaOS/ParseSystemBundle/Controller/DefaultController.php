<?php

namespace chaOS\ParseSystemBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
	public $header_menu = [
		'Ссылка 1',
		'Ссылка 2',
		'Ссылка 3',
		'Ссылка 4',
	];

    public function indexAction()
    {
        return $this->render('ParseSystemBundle:Default:index.html.twig', [
        	'header_menu' => $this->header_menu,
        ]);
    }
    public function showAddFormAction()
    {
    	return $this->render( 'ParseSystemBundle:Default:add-form.html.twig');
    }
}