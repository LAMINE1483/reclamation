<?php

namespace App\Form;

use App\Entity\Reclamation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ReclamationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('objet')
            
            ->add('matiere', ChoiceType::class, [
                'choices' => [
                    'Base de données' => 1,
                    'Probabilité' => 2,
                    'Dev-web' => 3,
                ],
                'choice_attr' => [
                    'Base de données' => ['data-color' => 'Red'],
                    'Probabilité' => ['data-color' => 'Yellow'],
                    'Dev-web' => ['data-color' => 'Green'],
                ],
            ])
            ->add('semestre', ChoiceType::class, [
                'choices' => [
                    'semestre 1' => 1,
                    'semestre 2' => 2,
                    'semestre 3' => 3,
                    'semestre 4' => 4,
                    'semestre 5' => 5,
                    'semestre 6' => 6,
                ],
                'choice_attr' => [
                    'semestre 1' => ['data-color' => 'Red'],
                    'semestre 2' => ['data-color' => 'Yellow'],
                    'semestre 3' => ['data-color' => 'Green'],
                    'semestre 4' => ['data-color' => 'Aqua'],
                    'semestre 5' => ['data-color' => 'Black'],
                    'semestre 6' => ['data-color' => 'Argente'],
                ],
            ])
            ->add('corps')
            //->add('DateCreation')
            // ->add('user')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }
}
