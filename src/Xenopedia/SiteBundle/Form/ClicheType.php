<?php

namespace Xenopedia\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ClicheType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('contenu')
            ->add('vote')
            ->add('dateAjout')
            ->add('valide')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Xenopedia\SiteBundle\Entity\Cliche'
        ));
    }

    public function getName()
    {
        return 'xenopedia_sitebundle_clichetype';
    }
}
