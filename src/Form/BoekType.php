<?php

namespace App\Form;

use App\Entity\Boek;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BoekType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('BoekId')
            ->add('ISBN')
            ->add('Author')
            ->add('Title')
            ->add('Price')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Boek::class,
        ]);
    }
}
