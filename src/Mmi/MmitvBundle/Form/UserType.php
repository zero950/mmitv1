<?php

namespace Mmi\MmitvBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class UserType extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username')
            ->add('email')
            ->add('expiresAt')
            ->add('Role', 'choice',array(
                'choices' => array(
                    'ROLE_ADMIN' => 'Role Administrateur',
                    'ROLE_REDAC' => 'Role Rédacteur'),
                'mapped' => false,
                'required' => true,
                'multiple' => false,
            ));
//            ->add('current_password', 'password', array(
//                'label' => 'form.current_password',
//                'translation_domain' => 'FOSUserBundle',
//                'mapped' => false,
//                'constraints' => new UserPassword(),
//            ))
//            ->add('plainPassword', 'repeated', array(
//                'type' => 'password',
//                'options' => array('translation_domain' => 'FOSUserBundle'),
//                'first_options' => array('label' => 'form.new_password'),
//                'second_options' => array('label' => 'form.new_password_confirmation'),
//                'invalid_message' => 'fos_user.password.mismatch'
//            ));

    }


    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mmi\MmitvBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mmi_mmitvbundle_user';
    }
}
