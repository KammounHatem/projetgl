<?php

namespace Acme\Bundle\GestionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('client')
            ->add('version')
            ->add('etat')
            ->add('liste')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\Bundle\GestionBundle\Entity\Produit'
        ));
    }

    public function getName()
    {
        return 'acme_bundle_gestionbundle_produittype';
    }
}
