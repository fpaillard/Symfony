<?php

namespace SiteWeb\ClientBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AdvertType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            
              ->add('title',       'text')
              ->add('author',    'text')
              ->add('content',   'textarea')
              ->add('telephone', 'text')
              ->add('image',     new ImageType())
              ->add('save',      'submit')
              ->add('ville',     'text')
              ->add('codepostal',     'text')
              ->add('email',     'email')
              ->add('prix',     'integer')
              ->add('motdepasse',     'password')
            ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SiteWeb\ClientBundle\Entity\Advert'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'siteweb_clientbundle_advert';
    }
}
