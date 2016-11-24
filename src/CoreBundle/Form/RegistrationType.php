<?php

namespace CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('email', EmailType::class, array('required' => true, 'attr' => array('placeholder' => 'enregistrement.email')))
				->add('username', TextType::class, array('required' => true, 'attr' => array('placeholder' => 'enregistrement.username')))
                ->add('password',RepeatedType::class, array(
                    'type' => PasswordType::class,
                    'invalid_message' => 'enregistrement.password_invalid',
                    'required' => true,
                    'first_options'  => array('attr' => array('placeholder' => 'enregistrement.password')),
                    'second_options' => array('attr' => array('placeholder' => 'enregistrement.password_repeat')),
                ));

    }
    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }
}
