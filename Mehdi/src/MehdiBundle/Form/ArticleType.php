<?php

namespace MehdiBundle\Form;
// src/MehdiBundle/Form/ArticleType.php

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArticleType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
   
        $builder
          ->add('date',      'date')
          ->add('title',     'text')
          ->add('author',    'text')
          ->add('content',   'textarea')
          ->add('published', 'checkbox', array('required' => false))
          //->add('image',      new ImageType()) // Ajoutez cette ligne
          ->add('save',      'submit')
        ;
    
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MehdiBundle\Entity\Article'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mehdibundle_article';
    }
}
