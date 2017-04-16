<?php

namespace WebPrj\WebSecurityBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('loginUser')->add('numDocUser')->add('typeDocUser')->add('passUser')->add('emailUser')->add('flastNameUser')->add('slastNameUser')->add('nameUser')->add('midNameUser')->add('statusUser')->add('userIdCreate')->add('dateCreated');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'WebPrj\WebSecurityBundle\Entity\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'webprj_websecuritybundle_user';
    }


}
