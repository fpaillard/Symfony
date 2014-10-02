<?php

// src/SiteWeb/ClientBundle/Controller/AdvertController.php

namespace SiteWeb\ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use SiteWeb\ClientBundle\Entity\Advert;
use SiteWeb\ClientBundle\Entity\Image;
use SiteWeb\ClientBundle\Form\AdvertType;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AdvertController extends Controller
{
   public function indexAction()
    {
       $repository = $this->getDoctrine()->getManager()->getRepository('SiteWebClientBundle:Advert');

		$listAdverts = $repository->findAll(array('published'=> 'true') );

       return $this->render('SiteWebClientBundle:Advert:index.html.twig', array('listAdverts' => $listAdverts));
    }
	public function viewAction($id)
	{
		 // repository
		$repository = $this->getDoctrine()->getManager()->getRepository('SiteWebClientBundle:Advert');

		// find id from repo
		$advert = $repository->find($id);

		// $advert est donc une instance de l'entité advert ou null si l'id n'éxiste pas
		
		if (null === $advert) {
		  throw new NotFoundHttpException("L'annonce n'existe pas.");
		}

		// render
		return $this->render('SiteWebClientBundle:Advert:view.html.twig', array(
		  'advert' => $advert
		));
	}

	public function addAction(Request $Request)
	{
		// Advert
	    $advert = new Advert();

	    // On crée le FormBuilder grâce au service form factory
	   	$form = $this->get('form.factory')->create(new AdvertType, $advert);


	    if ($form->handleRequest($Request)->isValid()) {
	      
	    	
	      	$em = $this->getDoctrine()->getManager();
	      	if(null===$advert->getImage()->getFile())
	      	{
	      		$advert->setImage();
	      	}
	      	$em->persist($advert);
	      	$em->flush();
	      	$Request->getSession()->getFlashBag()->clear();
	      	$Request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
	      	$em->close();

	      	// On redirige vers la page de visualisation de l'annonce nouvellement créée
	      	return $this->redirect($this->generateUrl('Siteweb_Client_view', array('id' => $advert->getId())));
	    }

    // À ce stade, le formulaire n'est pas valide car :
    // - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
    // - Soit la requête est de type POST, mais le formulaire contient des valeurs invalides, donc on l'affiche de nouveau
    return $this->render('SiteWebClientBundle:Advert:add.html.twig', array( 'form' => $form->createView(),));
  	}
	

	public function deleteAction($id, Request $request)
	{
		$em = $this->getDoctrine()->getManager();


	    $advert = $em->getRepository('SiteWebClientBundle:Advert')->find($id);

	    if (null === $advert) {
	      throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
	    }

	    // On crée un formulaire vide, qui ne contiendra que le champ CSRF
	    // Cela permet de protéger la suppression d'annonce contre cette faille
	    $form = $this->createFormBuilder()->getForm();

	    if ($form->handleRequest($request)->isValid()) {
	    	if( $request->request->get('pswd') == $advert->getMotdepasse())  	
	      	{
	      		$em->remove($advert);
		    	$em->flush();
		    	$request->getSession()->getFlashBag()->add('info', "L'annonce a bien été supprimée.");
		     	return $this->redirect($this->generateUrl('Siteweb_Client_home'));
		    }
		    else
		    {
		    	$request->getSession()->getFlashBag()->add('info', "Mot de passe incorrect.");
		    }
	    }

	    // Si la requête est en GET, on affiche une page de confirmation avant de supprimer
	    return $this->render('SiteWebClientBundle:Advert:delete.html.twig', array(
	      'advert' => $advert,
	      'form'   => $form->createView()
	    ));
	}

	public function myAdvertsAction(Request $Request)
	{
		if ($Request->getMethod() == 'POST')
		{
			$email=$Request->request->get('email');
			
			 // repository
			$repository = $this->getDoctrine()->getManager()->getRepository('SiteWebClientBundle:Advert');

			// find id from repo
			$adverts = $repository->findBy(array('email'=>$email));

			
			$message = \Swift_Message::newInstance()->setSubject('Vos Annonces')->setFrom('DoNotReply@donotreply.com')->setTo($email); 
        	if (count($adverts) != '0')
        	{
        		
				$message->setBody($this->renderView('SiteWebClientBundle:Advert:mailHTML.html.twig', array('adverts' => $adverts)),"text/html");
    			$this->get('mailer')->send($message);        	
    		}
    		
    		$Request->getSession()->getFlashBag()->add('notice', "Email envoyé.");
        	
		}
		
			return $this->render('SiteWebClientBundle:Advert:myAdverts.html.twig');
		

	}

	
}