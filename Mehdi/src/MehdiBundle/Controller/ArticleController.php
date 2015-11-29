<?php

namespace MehdiBundle\Controller;

use MehdiBundle\Entity\Article;
use MehdiBundle\Entity\Image;
use MehdiBundle\Entity\Application;
use MehdiBundle\Entity\ArticletSkill;
use MehdiBundle\Form\ArticleType;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;



class ArticleController extends Controller
{
  public function indexAction()
  {
    // L'appel de la vue ne change pas
    return $this->render('MehdiBundle:Article:index.html.twig');
  }

  public function viewAction($id)
  {
    // On récupère l'EntityManager
    $em = $this->getDoctrine()->getManager();

    // Pour récupérer une annonce unique : on utilise find()
    $article = $em->getRepository('MehdiBundle:Article')->find($id);

    // On vérifie que l'annonce avec cet id existe bien
    if ($article === null) {
      throw $this->createNotFoundException("L'annonce d'id ".$id." n'existe pas.");
    }

    // On récupère la liste des advertSkill pour l'annonce $advert
    $listArticleSkills = $em->getRepository('MehdiBundle:ArticleSkill')->findByArticle($article);

    // Puis modifiez la ligne du render comme ceci, pour prendre en compte les variables :
    return $this->render('MehdiBundle:Article:view.html.twig', array(
      'article'           => $article,
      'listArticleSkills' => $listArticleSkills,
    ));
  }
    /**
   * @Security("has_role('ROLE_AUTEUR')")
   */
  public function addAction(Request $request)
  {
       
    $article = new Article();  
  
    $form = $this->get('form.factory')->create(new ArticleType(), $article);
    // On vérifie que les valeurs entrées sont correctes
    // (Nous verrons la validation des objets en détail dans le prochain chapitre)
    if ($form->handleRequest($request)->isValid()) {
      $em = $this->getDoctrine()->getManager();
      $em->persist($article);
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

      return $this->redirect($this->generateUrl('mehdi_view', array('id' => $article->getId())));
    }

    // À ce stade, le formulaire n'est pas valide car :
    // - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
    // - Soit la requête est de type POST, mais le formulaire contient des valeurs invalides, donc on l'affiche de nouveau
    return $this->render('MehdiBundle:Article:add.html.twig', array(
      'form' => $form->createView(),
    ));
  }

  public function editAction($id, Request $request)
  {
    // On récupère l'EntityManager
    $em = $this->getDoctrine()->getManager();

    // On récupère l'entité correspondant à l'id $id
    $article = $em->getRepository('MehdiBundle:Article')->find($id);

    // Si l'annonce n'existe pas, on affiche une erreur 404
    if ($article == null) {
      throw $this->createNotFoundException("L'annonce d'id ".$id." n'existe pas.");
    }


    $form = $this->get('form.factory')->create(new ArticleType(), $article);
    // On vérifie que les valeurs entrées sont correctes
    // (Nous verrons la validation des objets en détail dans le prochain chapitre)
    if ($form->handleRequest($request)->isValid()) {
     
      $em->persist($article);
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifié.');

      return $this->redirect($this->generateUrl('mehdi_view', array('id' => $article->getId())));
    }
     // Ici, on s'occupera de la création et de la gestion du formulaire

   
    // À ce stade, le formulaire n'est pas valide car :
    // - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
    // - Soit la requête est de type POST, mais le formulaire contient des valeurs invalides, donc on l'affiche de nouveau

        return $this->render('MehdiBundle:Article:edit.html.twig', 
      array(
        'article' => $article,
        'form' => $form->createView()
        )
      );
  }

  public function deleteAction($id, Request $request)
  {
    // On récupère l'EntityManager
    $em = $this->getDoctrine()->getManager();

    // On récupère l'entité correspondant à l'id $id
    $article = $em->getRepository('MehdiBundle:Article')->find($id);

    // Si l'annonce n'existe pas, on affiche une erreur 404
    if ($article == null) {
      throw $this->createNotFoundException("L'annonce d'id ".$id." n'existe pas.");
    }

    /* if ($request->isMethod('POST')) {
      // Si la requête est en POST, on deletea l'article


      $request->getSession()->getFlashBag()->add('info', 'Annonce bien supprimée.');

      // Puis on redirige vers l'accueil
      return $this->redirect($this->generateUrl('mehdi_home'));
    }*/

    $em = $this->getDoctrine()->getEntityManager();
    $em->remove($article);
    $em->flush();

    // Si la requête est en GET, on affiche une page de confirmation avant de delete
    return $this->render('MehdiBundle:Article:delete.html.twig', array(
      'id' => $id
    ));
  }
  public function ListArticlesAction()
  {
    
      $repository = $this
    ->getDoctrine()
    ->getManager()
    ->getRepository('MehdiBundle:Article')
      ; 


    $listArticles = $repository->findAll();

    return $this->render('MehdiBundle:Article:ListArticle.html.twig', array(
      'listArticles' => $listArticles
    ));
  }


  public function menuAction($limit = 3)
  {
    $listArticles = $this->getDoctrine()
      ->getManager()
      ->getRepository('MehdiBundle:Article')
      ->findBy(
        array(),                 // Pas de critère
        array('date' => 'desc'), // On trie par date décroissante
        $limit,                  // On sélectionne $limit annonces
        0                        // À partir du premier
    );

    return $this->render('MehdiBundle:Article:menu.html.twig', array(
      'listArticles' => $listArticles
    ));
  }

  public function about_usAction()
  {
    return $this->render('MehdiBundle:Article:about_us.html.twig');
   }

  public function micro_geolocalisationAction()
  {
    return $this->render('MehdiBundle:Article:micro_geolocalisation.html.twig');
   }

    public function beaconAction()
  {
    return $this->render('MehdiBundle:Article:beacon.html.twig');
   }

    public function bluemixAction()
  {
    return $this->render('MehdiBundle:Article:bluemix.html.twig');
   }

    public function equipeAction()
  {
    return $this->render('MehdiBundle:Article:equipe.html.twig');
   }

  public function contactAction()
  {
    return $this->render('MehdiBundle:Article:contact.html.twig');
   }
}