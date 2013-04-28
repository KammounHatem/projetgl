<?php

namespace Acme\Bundle\GestionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ComposanteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('version')
            ->add('nature', 'choice', array(
                    'choices'   => array(
                    'exe'   => 'exe',
                    'lib' => 'lib',
                    'dll'   => 'dll',
                     'src'   => 'src',            
                        ),
                         
                           ))
            ->add('license')
            ->add('cout')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\Bundle\GestionBundle\Entity\Composante'
        ));
    }

    public function getName()
    {
        return 'acme_bundle_gestionbundle_composantetype';
    }
}
