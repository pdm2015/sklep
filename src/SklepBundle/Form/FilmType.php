<?php

namespace SklepBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FilmType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tytul')
            ->add('opis')
            ->add('cena')
            ->add('aktorzy')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SklepBundle\Entity\Film'
        ));
    }

    public function getName()
    {
        return 'sklepbundle_film';
    }
}
