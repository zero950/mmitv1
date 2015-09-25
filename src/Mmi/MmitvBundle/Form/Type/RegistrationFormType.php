<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


namespace Mmi\MmitvBundle\Form\Type;

use Symfony\Component\Form\AbstractType as AbstractType ;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);



        $builder->add('expiresAt', 'date', array(
            'input'=> 'datetime',
            'widget'=> 'choice'
        ))
            ->add('Role', 'choice',array(
                'choices' => array(
                'ROLE_ADMIN' => 'Role Administrateur',
                'ROLE_REDAC' => 'Role Rédacteur'),
                'mapped' => false,
                'required' => true,
                'multiple' => false,
            ));




    }

    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getName()
    {
        return 'mmi_mmitv_registration';
    }
}