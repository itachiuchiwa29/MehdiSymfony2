<?php
// src/MehdiBundle/Entity/ArticleRepository.php

namespace MehdiBundle\Entity;

use Doctrine\ORM\EntityRepository;

class ArticleRepository extends EntityRepository
{
  public function getArticle()
  {
    // Dans indexAction, on utilise maintenant getAdverts et non plus findAll :
	$listArticles = $this->getDoctrine()
	  ->getManager()
	  ->getRepository('MehdiBundle:Article')
	  ->getArticle()
	;

    return $query->getResult();
  }
}