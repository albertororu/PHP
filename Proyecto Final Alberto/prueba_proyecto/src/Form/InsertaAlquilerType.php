<?php

namespace App\Form;

use App\Entity\Alquiler;
use App\Entity\Pista;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;

class InsertaAlquilerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
      
        $builder
            ->add('Dia', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Día',
            ])
            ->add('Hora', TimeType::class, [
                'widget' => 'choice',
                'label' => 'Hora',
                'minutes' => ['0'],
                'hours' => ['10', '11', '12', '13', '17', '18', '19', '20', '21']
            ])
            ->add('id_user', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'username', 
                'label' => 'Usuario',
            ])
            ->add('id_pista', EntityType::class, [
                'class' => Pista::class,
                'choice_label' => 'id',
                'label' => 'Pista',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Alquiler::class,
        ]);
    }
}
           
  