<?php
// src/MehdiBundle/Entity/ArticleSkill.php

namespace MehdiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="MehdiBundle\Entity\ArticleSkillRepository")
 */
class ArticleSkill
{
  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @ORM\ManyToOne(targetEntity="MehdiBundle\Entity\Article")
   * @ORM\JoinColumn(nullable=false)
   */
  private $article;

  /**
   * @ORM\ManyToOne(targetEntity="MehdiBundle\Entity\Skill")
   * @ORM\JoinColumn(nullable=false)
   */
  private $skill;

  /**
   * @ORM\Column(name="level", type="string", length=255)
   */
  private $level;

  /**
   * @return integer
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * @param Article $article
   * @return ArticleSkill
   */
  public function setArticle(Article $article)
  {
    $this->article = $article;
    return $this;
  }

  /**
   * @return Article
   */
  public function getArticle()
  {
    return $this->article;
  }

  /**
   * @param Skill $skill
   * @return ArticleSkill
   */
  public function setSkill(Skill $skill)
  {
    $this->skill = $skill;
    return $this;
  }

  /**
   * @return Skill
   */
  public function getSkill()
  {
    return $this->skill;
  }

  /**
   * @param string $level
   * @return ArticleSkill
   */
  public function setLevel($level)
  {
    $this->level = $level;
    return $this;
  }

  /**
   * @return string
   */
  public function getLevel()
  {
    return $this->level;
  }
}
