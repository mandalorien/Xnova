<?php

namespace CoreBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;

class UniversType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('addUniver', CollectionType::class, array(
            'class' => 'GameBundle:Univers',
            'query_builder' => function (EntityRepository $er){
                return $er->createQueryBuilder('u');
            },
            'choice_label' => 'nom',
            'empty_data'=>null,
            'label'=>'univers',
            'by_reference' => false,
            'allow_add'    => true,
            'allow_delete' => true
        ));

    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }
}
