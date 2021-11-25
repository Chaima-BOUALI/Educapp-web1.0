<?php

namespace App\Form;

use App\Entity\Session;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SessionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomSession')
<<<<<<< HEAD
            ->add('startDate')
=======
            ->add('startSate')
>>>>>>> a7c45923a7d8dc09346915264934b22b0081650d
            ->add('endDate')
            ->add('descriptionSession')
            ->add('placesDisponibles')
            ->add('urlImage')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Session::class,
        ]);
    }
}
