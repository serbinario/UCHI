<?php

namespace Serbinario\Bundle\UCHIBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CandidatoTemTrabalhoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('trabalhoTrabalho', 'entity', array(
                'label'        => false,
                'empty_value' => "Selecione um trabalho",
                'class' => 'Serbinario\Bundle\UCHIBundle\Entity\Trabalho',
                'attr' => array(
                     'widget_col'=> '10',
                    )
                ))
            ->add('qtdCandidatoTemTrabalho', 'text', array(
                'label' => false, 
                'required'     => true,
                'attr' => array(
                    'placeholder' => 'Quantidade de trabalhos',
                    'widget_col'=> '10',
                    "class"    => " mask_numero"
                )))       
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Serbinario\Bundle\UCHIBundle\Entity\CandidatoTemTrabalho'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'serbinario_bundle_uchibundle_candidatotemtrabalho';
    }
}
