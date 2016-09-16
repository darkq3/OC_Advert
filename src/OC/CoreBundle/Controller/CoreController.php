<?php

namespace OC\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

class CoreController extends Controller
{
    public function viewAction()
    {
        $content = $this->get('templating')->render('OCCoreBundle:Core:view.html.twig');    
    	return new Response($content);
    }

    public function contactAction()
    {
    	$this->get('ras_flash_alert.alert_reporter')->addInfo("Message Flash : La page de contact n’est pas encore disponible, merci de revenir plus tard");
        return $this->redirectToRoute('oc_core_accueil');
    }
}