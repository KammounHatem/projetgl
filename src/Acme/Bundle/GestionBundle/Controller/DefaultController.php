<?php
namespace Acme\Bundle\GestionBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Acme\Bundle\GestionBundle\Entity\Responsable;
use Acme\Bundle\GestionBundle\Form\ResponsableType;
use Acme\Bundle\GestionBundle\Entity\Composante;
use Acme\Bundle\GestionBundle\Form\ComposanteType;
use Acme\Bundle\GestionBundle\Form\ProduitType;
use Acme\Bundle\GestionBundle\Entity\Produit;
class DefaultController extends Controller
{
    public function indexAction()
    {
        
        return $this->render('AcmeGestionBundle:Default:index.html.twig');
    }
     public function adminpageAction()
    {
        
        return $this->render('AcmeGestionBundle:Default:admin.html.twig');
    }
    ///////////////////////////////////////////////////////
    
    /////////////////////////////////////////////////////////
    
    ////////////////////////////////////////////////////
    public function ajouterresponsableAction()
   {
     $message='';
  $responsable = new Responsable();
  $form = $this->container->get('form.factory')->create(new ResponsableType(), $responsable);

  $request = $this->container->get('request');

  if ($request->getMethod() == 'POST') 
  {
    $form->bindRequest($request);

    if ($form->isValid()) 
    {
      $em = $this->container->get('doctrine')->getEntityManager();
      $em->persist($responsable);
      $em->flush();
      $message='Acteur ajouté avec succès !';
    }
  }

  return $this->container->get('templating')->renderResponse('AcmeGestionBundle:Default:ajoutresponsable.html.twig',array(
    'form' => $form->createView(),
    'message' => $message,
  ));
}




////////////////////////////////////////////////
public function supprimerresponsabeleAction($id)
{
  $em = $this->container->get('doctrine')->getEntityManager();
  $responsable = $em->find('AcmeGestionBundle:Responsable', $id);
        
  if (!$responsable) 
  {
    throw new NotFoundHttpException("Responsable non trouvé");
  }
        
  $em->remove($responsable);
  $em->flush();        


  return $this->render('AcmeGestionBundle:Default:index.html.twig');
}

////////////////////////////////////////////////////////////////

public function listerresponsableAction()
       {
	   $em = $this->container->get('doctrine')->getEntityManager();
	   $responsable = $em->getRepository('AcmeGestionBundle:Responsable')->findAll();

	return $this->container->get('templating')->renderResponse('AcmeGestionBundle:Default:listeresponsable.html.twig',array(
		 'responsable' => $responsable)
	);
            }

///////////////////////////////////////////////////////////////////////////////




public function editerrespAction($id = null)
{
	$message='';
	$em = $this->container->get('doctrine')->getEntityManager();

	if (isset($id)) 
	{
		// modification d'un acteur existant : on recherche ses données
		$responsable = $em->find('AcmeGestionBundle:Responsable', $id);

		if (!$responsable)
		{
			$message='responsable trouvé';
		}
	}
	else 
	{
		// ajout d'un nouvel acteur
		$responsable = new Responsable();
	}

	$form = $this->container->get('form.factory')->create(new ResponsableType(), $responsable);

	$request = $this->container->get('request');

	if ($request->getMethod() == 'POST') 
	{
    	  	$form->bindRequest($request);

	if ($form->isValid()) 
	{
		$em->persist($responsable);
		$em->flush();
		if (isset($id)) 
		{
			$message='Acteur modifié avec succès !';
		}
		else 
		{
			$message='Acteur ajouté avec succès !';
		}
                
	}
	}

	return $this->container->get('templating')->renderResponse(
'AcmeGestionBundle:Default:modifierresponsable.html.twig',
	array(
	'form' => $form->createView(),
	'message' => $message,
	));
}

//////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////



public function ajoutercompoAction()
   {
     $message='';
  $composante= new Composante();
  $form = $this->container->get('form.factory')->create(new ComposanteType(), $composante);

  $request = $this->container->get('request');

  if ($request->getMethod() == 'POST') 
  {
    $form->bindRequest($request);

    if ($form->isValid()) 
    {
      $em = $this->container->get('doctrine')->getEntityManager();
      $em->persist($composante);
      $em->flush();
      $message='Composante ajoutée avec succès !';
    }
  }

  return $this->container->get('templating')->renderResponse('AcmeGestionBundle:Compo:ajoutcomposante.html.twig',array(
    'form' => $form->createView(),
    'message' => $message,
  ));
 
  
}
 //////////////////////////////////////////////////////////////////
  /////////////////////////////////////////////////////////////////

public function supprimercompAction($id)
{
  $em = $this->container->get('doctrine')->getEntityManager();
  $composante = $em->find('AcmeGestionBundle:Composante', $id);
        
  if (!$composante) 
  {
    throw new NotFoundHttpException("composante non trouvée");
  }
        
  $em->remove($composante);
  $em->flush();        


  return $this->render('AcmeGestionBundle:Default:index.html.twig');
}
/////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////
public function listercomposanteAction()
       {
	   $em = $this->container->get('doctrine')->getEntityManager();
	   $composante = $em->getRepository('AcmeGestionBundle:Composante')->findAll();

	return $this->container->get('templating')->renderResponse('AcmeGestionBundle:Compo:consultercomposante.html.twig',array(
		 'composante' => $composante)
	);
            }
            
  ///////////////////////////////////////////////     
 //////////////////////////////////////////////////////////////
       public function modifiercompAction($id = null)
{
	$message='';
	$em = $this->container->get('doctrine')->getEntityManager();

	if (isset($id)) 
	{
		// modification d'un acteur existant : on recherche ses données
		$composante = $em->find('AcmeGestionBundle:Composante', $id);

		if (!$composante)
		{
			$message='Aucun composante trouvé';
		}
	}
	else 
	{
		// ajout d'un nouvel acteur
		$composante = new Composante();
	}

	$form = $this->container->get('form.factory')->create(new ComposanteType(), $composante);
         
	$request = $this->container->get('request');

	if ($request->getMethod() == 'POST') 
	{
    	  	$form->bindRequest($request);

	if ($form->isValid()) 
	{
		$em->persist($composante);
		$em->flush();
		if (isset($id)) 
		{
			$message='composante modifié avec succès !';
		}
		else 
		{
			$message='composante ajouté avec succès !';
		}
	}
	}

	return $this->container->get('templating')->renderResponse('AcmeGestionBundle:Compo:modifiercomposante.html.twig',
	array(
	'form' => $form->createView(),
	'message' => $message,
	));
        
        
}


/////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////



public function ajouterproduitAction()
   {
     $message='';
  $produit= new Produit();
  $form = $this->container->get('form.factory')->create(new ProduitType(), $produit);

  $request = $this->container->get('request');

  if ($request->getMethod() == 'POST') 
  {
    $form->bindRequest($request);

    if ($form->isValid()) 
    {
      $em = $this->container->get('doctrine')->getEntityManager();
      $em->persist($produit);
      $em->flush();
      $message='produit ajouté avec succès !';
    }
  }

  return $this->container->get('templating')->renderResponse('AcmeGestionBundle:Product:ajoutproduit.html.twig',array(
    'form' => $form->createView(),
    'message' => $message,
  ));
 
  
}
 //////////////////////////////////////////////////////////////////
  /////////////////////////////////////////////////////////////////

public function supprimerproduitAction($id)
{
  $em = $this->container->get('doctrine')->getEntityManager();
  $produit = $em->find('AcmeGestionBundle:Produit', $id);
        
  if (!$produit) 
  {
    throw new NotFoundHttpException("produit non trouvé");
  }
        
  $em->remove($produit);
  $em->flush();        


  return $this->render('AcmeGestionBundle:Default:index.html.twig');
}
/////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////
public function listerproduitAction()
       {
	   $em = $this->container->get('doctrine')->getEntityManager();
	   $produit= $em->getRepository('AcmeGestionBundle:Produit')->findAll();

	return $this->container->get('templating')->renderResponse('AcmeGestionBundle:Product:listeproduit.html.twig',array(
		 'produit' => $produit)
	);
            }
            
  ///////////////////////////////////////////////     
 //////////////////////////////////////////////////////////////
       public function modifierproduitAction($id = null)
{
	$message='';
	$em = $this->container->get('doctrine')->getEntityManager();

	if (isset($id)) 
	{
		// modification d'un acteur existant : on recherche ses données
		$produit = $em->find('AcmeGestionBundle:Produit', $id);

		if (!$produit)
		{
			$message='Aucun produit trouvé';
		}
	}
	else 
	{
		// ajout d'un nouvel acteur
		$produit = new Produit();
	}

	$form = $this->container->get('form.factory')->create(new ProduitType(), $produit);
         
	$request = $this->container->get('request');

	if ($request->getMethod() == 'POST') 
	{
    	  	$form->bindRequest($request);

	if ($form->isValid()) 
	{
		$em->persist($composante);
		$em->flush();
		if (isset($id)) 
		{
			$message='produit modifié avec succès !';
		}
		else 
		{
			$message='produit ajouté avec succès !';
		}
	}
	}

	return $this->container->get('templating')->renderResponse('AcmeGestionBundle:Product:modifierproduit.html.twig',
	array(
	'form' => $form->createView(),
	'message' => $message,
	));
        
        
}













}
