<?php

namespace Serbinario\Bundle\UCHIBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TrabalhoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomeTrabalho')
            ->add('canditatoCanditato')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Serbinario\Bundle\UCHIBundle\Entity\Trabalho'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'serbinario_bundle_uchibundle_trabalho';
    }
}
