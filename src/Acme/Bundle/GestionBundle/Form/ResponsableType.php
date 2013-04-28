<?php

namespace Acme\Bundle\GestionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ResponsableType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',       'text')
            ->add('prenom',    'text')
            ->add('mail',      'email')
            ->add('tel',       'text')
            ->add('login',     'text')
            ->add('password',  'text')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\Bundle\GestionBundle\Entity\Responsable'
        ));
    }

    public function getName()
    {
        return 'acme_bundle_gestionbundle_responsabletype';
    }
}
